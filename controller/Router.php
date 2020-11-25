<?php
namespace ABI\controller;
use ABI\controller\Buisness;

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
               elseif(!empty($_POST['first_name'])&&!empty($_POST['last_name'])&&
                     !empty($_POST['email'])&&!empty($_POST['password'])&&!empty($_POST['role']))
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
         elseif ($this->page==='logOut')
         {
            Controller::logOut();
         }
         elseif($this->page==='buisness')
         {
            if((!empty($_POST['secteur'])&&!empty($_POST['raison_sociale'])&&!empty($_POST['adresse'])
               &&!empty($_POST['code_postale'])&&!empty($_POST['ville'])
               &&!empty($_POST['effectif'])&&!empty($_POST['telephone'])))
            {
               Buisness::addClientBuisness(  htmlentities($_POST['secteur']),
                                             htmlentities($_POST['raison_sociale']),
                                             htmlentities($_POST['adresse']),
                                             htmlentities($_POST['code_postale']),
                                             htmlentities($_POST['ville']),
                                             htmlentities($_POST['effectif']),
                                             htmlentities($_POST['telephone']));
            }
            else
            {
               return Controller::viewPage('../view/pages/buisnessView.php');
            }
         }
          
        else
        {
        
           return Controller::viewPage('../view/pages/indexView.php');
        }
    }
}

?>