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
                                                
         if(isset($_POST['email'])&& isset($_POST['password']))
          {
             
                Dashboard::checkUser(htmlentities($_POST['email']),htmlentities($_POST['password']));
             
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