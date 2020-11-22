<?php
namespace ABI\controller;
use \PDO;


class Auth

{
    public $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }
    public function user(): ?User
    {
        if(session_status()===PHP_SESSION_NONE)
        {
            session_start();
        }
        $id=$_SESSION['id'] ?? null;
        
        if($id===null)
        {
            return null;
        }
        $query= $this->pdo->prepare('SELECT * FROM utilisateur WHERE id_user= ?');
        $query->execute([$id]);
        $user=$query->fetchObject(User::class);
         return $user ?: null;// revoi l'utilisateur si c false il revoi null
       
    }
    public function login(string $user_name, string $password): ?User
    {
        $query= $this->pdo->prepare('SELECT * FROM utilisateur WHERE email=:username');
        $query->execute(['username'=>$user_name]);
        $user=$query->fetchObject(User::class);
        
        if($user===false)
        {
            return null;
        }
        if(password_verify($password, $user->password))
        {
            if(session_status()=== PHP_SESSION_NONE)
            {
                session_start();
            }
                $_SESSION['id']= $user->id_user;
                $_SESSION['first_name']=$user->first_name;
                $_SESSION['last_name']=$user->last_name;
            return $user;
            
        }
        return null;

    }
   
}


?>