<?php
namespace ABI\model;

use Exception;
use \PDO;

class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    private static $database;

    public function __construct($db_name, $db_user='root', $db_pass='', $db_host='localhost')
    {
        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_pass=$db_pass;
        $this->db_host=$db_host;
    }

    private function getPDO()
    {
        try
        {
            if($this->pdo===null)
            {
                $pdo= new PDO('mysql:host=localhost;dbname=abi','root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->pdo=$pdo;
            }
            return $pdo;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }   
    }
    
    
    public function getUsers ()
    {
        try
        {
            $req=$this->getPDO()->query('SELECT * FROM utilisateur');
            $users=$req->fetchAll(PDO::FETCH_OBJ);
            return $users;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function getUser($email, $password)
    {
        try{
            $req=$this->getPDO()->prepare("SELECT * FROM utilisateur WHERE email=:email AND password=:password");
            $req->execute([
                'email'=>$email,
                'password'=>$password
            ]);
            
            return $req->fetch(PDO::FETCH_OBJ);
            
           
        }
        catch(Exception $e)
        
        {
            die($e->getMessage()); 
        }

    }
    public function updateUser($id,$role)
    {
        try
        {
            $req= $this->getPDO()->prepare('UPDATE utilisateur SET role= :role WHERE id_user=:id');
            $req->execute([
                'role'=>$role,
                'id'=>$id
            ]);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }
    public function deleteUser($id)
    {
        try
        {
            $req= $this->getPDO()->prepare('DELETE FROM utilisateur WHERE id_user=:id');
            $req->execute([
            
                'id'=>$id
            ]);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }
    public function addUser($first_name, $last_name, $email, $password, $role)
    {
        try
        {
            $req= $this->getPDO()->prepare("INSERT INTO utilisateur(first_name, last_name, email, password, role) VALUES (:first_name,:last_name,:email,:password,:role)");
            $req->execute([
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'password'=>$password,
                'email'=>$email,
                'role'=>$role,
            
            ]);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function showUser($value)
    {
        //try{
            $req= $this->getPDO()->prepare('SELECT * FROM utilisateur WHERE first_name=:first_name OR last_name=:last_name');
            $req->execute([
                'first_name'=>$value,
                'last_name'=>$value
            ]);
            return $req->fetchALL(PDO::FETCH_OBJ);
        
      //  }
        //catch(Exception $e)
        //{
            //die($e->getMessage());
        //}
    }
}
?>