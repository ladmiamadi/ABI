<?php
namespace ABI\controller;

class Router 
{
    private $page;
    private $action;

    public function __construct($page)
    {
        $this->page=$page;
    }

    public function route()
    {
        if ($this->page==='home')
        {
           return Controller::viewPage('../view/pages/indexView.php');
        }
        elseif($this->page==='ABIgroup')
        {
          return  Controller::viewPage('../view/pages/groupView.php');
        }
        elseif($this->page==='actuality')
        {
           return Controller::viewPage('../view/pages/actualityView.php');
        }
        elseif($this->page==='offer')
        {
           return Controller::viewPage('../view/pages/offerView.php');
        }
        elseif($this->page==='contact')
        {
           return Controller::viewPage('../view/pages/contactView.php');
        }
        elseif($this->page==='connexion')
        
        { 
          return  Controller::viewPage('../view/pages/connexionView.php');
           
        }
        elseif($this->page==='dashboard')
        {
                                                      
               if(isset($_POST['emailLog'])&& isset($_POST['passwordLog']))
               {
                  
                     Dashboard::checkUser(htmlentities($_POST['emailLog']),htmlentities($_POST['passwordLog']));
                  
               }
               elseif(!empty($_POST['first_name'])&&!empty($_POST['last_name'])&&!empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['role']))
               {
                  $pass= htmlentities($_POST['password']);
                  $pass= password_hash($pass, PASSWORD_DEFAULT);
                  Dashboard::addUserDashboard(htmlentities($_POST['first_name']),
                                             htmlentities($_POST['last_name']),
                                             htmlentities($_POST['email']),
                                             $pass,
                                             htmlentities($_POST['role']));
               }
              
               else
               {
              return Controller::viewPage('../view/pages/dashboardView.php');
               }

        }
        elseif($this->page==='dashboardList')
        {
              
         return Controller::viewList('../view/pages/dashboardView.php');
         }
         elseif ($this->page==='logOut')
         {
            Controller::logOut();
         }
          
        else
        {
        
           return Controller::viewPage('../view/pages/indexView.php');
        }
    }
}

?>