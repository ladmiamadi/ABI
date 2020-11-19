<?php
namespace ABI\controller;

class Controller
{
    public static $results;

    public static function viewPage($url)
    {
        require $url;
    }
    public static function viewList($url)
    {
        self::$results=Dashboard::viewUsers();
        require $url;
    }
    public static function viewConnexion($url)
    {
        //self::$results=Dashboard::checkUser();
        require $url;
    }
    public static function logOut()
    {
        session_start();
        session_destroy();
        header('Location:./index.php?page=connexion');
    }
  
}

?>