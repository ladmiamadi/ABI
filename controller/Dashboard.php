<?php
namespace ABI\controller;
use \ABI\model\Database;


class Dashboard
{
    public static function viewUsers()
    {
        $results= new Database('abi');
        return $results->getUsers();
       
    }
    public static function checkUser($email, $password)
    {
        $results= new Database('abi');
        $result=$results->getUser($email,$password);
        
        if(!empty($result))
        {
            session_start();
            $_SESSION['first_name']=$result->first_name;
            $_SESSION['last_name']=$result->last_name;
            header('Location:./index.php?page=dashboard&first_name='.$result->first_name.'&last_name='.$result->last_name);
        }
        else
        {
            header('Location:./index.php?page=connexion&error=true');
        }
    }
    public static function addUserDashboard($first_name, $last_name, $email, $password, $role)
    {
        $results= new Database('abi');
        $result=$results->addUser($first_name,$last_name,$email,$password,$role);
        header('Location:./index.php?page=dashboard&successAdd=true');
       
        return $result;
    }


    
    public static function modifyUserDashboard($value)
    {
        $results= new Database('abi');
        return $results->showUser($value);
    }
    
   
}
?>