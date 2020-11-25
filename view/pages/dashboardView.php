<?php


use ABI\controller\Controller;


use \ABI\controller\Auth;

$title='Tableau de bord';


Auth::checkRoleAdmin();
$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];

ob_start(); 
?>

<hr class="py-0 my-0">
<div class='row p-2 bonjour mx-0'>
        <div class='col'>
        <div class="p-3 alert alert-success">Vous étes connecté en tant que <?= strtoupper($first_name).' '.strtoupper($last_name); ?></div>

        </div>
        <div class="col text-right">
        <a class="nav-link" href="./index.php?page=logOut" data-toggle="tooltip" title="Se déconnecter">Déconnexion<span class="p-3"><img class="logout"src="./IMG/logout.jpg"></span></a>

        </div>

</div>

<hr class="py-0 my-0">
<?php
                    if(isset($_GET['successAdd']))
                    {
                ?>
                    <div class="alert alert-success">
                           Utilisateur ajouté avec succés!

                    </div>
                <?php
                    }
                ?>

<div class="row modif text-center mb-4">
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="../public/index.php?page=dashboard&amp;action=dashboardList" class="nav-link"><img src="./IMG/users.jpg"></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../public/index.php?page=dashboard&amp;action=dashboardList">Afficher les utilisateurs</a>
                </li>   
            </ul>
               
        </div>
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="../public/index.php?page=dashboard&amp;action=modifyUser" class="nav-link"><img src="./IMG/update.jpg"></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../public/index.php?page=dashboard&amp;action=modifyUser">Modifier les utilisateurs</a>
                </li>   
            </ul>
               
        </div>
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="../public/index.php?page=dashboard&amp;action=addUser" class="nav-link"><img src="./IMG/adduser.jpg"></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../public/index.php?page=dashboard&amp;action=addUser">Ajouter un utilisateur</a>
                </li>   
            </ul>
               
        </div>
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="../public/index.php?page=dashboardList" class="nav-link"><img src="./IMG/delete.png"></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../public/index.php?page=dashboardList">Supprimer un utilisateur</a>
                </li>   
            </ul>
               
        </div>
</div>


<?php 
    if(isset($_GET['action']))
    {

                    if($_GET['action']==='dashboardList')
                    {
                        Controller::viewPage('../view/section/listView.php');
                    }
                            
                
                    elseif($_GET['action']==='addUser')
                    {
                        Controller::viewPage('../view/section/addUserView.php');
                                
                    }
                    elseif($_GET['action']==='modifyUser')
                    {
                        Controller::viewPage('../view/section/modifyUserView.php');
                                
                    }
                                            
    }
                                
?>
   </div>         

    <?php $content=ob_get_clean(); ?>

<?php require '../view/template/template_admin.php'; ?>
   

