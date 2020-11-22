<?php


use ABI\controller\Controller;

use \ABI\model\Database;
use \ABI\controller\Auth;

$title='Tableau de bord';


$data= new Database('abi');
$auth= new Auth($data->getPDO());

if($auth->user()!==null)
{
    //session_start();
    $first_name=$_SESSION['first_name'];
    $last_name=$_SESSION['last_name'];
    //header('Location:./index.php?page=dashboard');
}
else
{
   header('Location:./index.php?page=connexion');
}
ob_start(); 
?>

<hr class="py-0 my-0">
<div class='row p-2 bonjour mx-0'>
        <div class='col'>
        <h4 class="p-3">Bonjour<em> <?= strtoupper($first_name).' '.strtoupper($last_name); ?></em></h4>

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
                  <a href="../public/index.php?page=dashboardList" class="nav-link"><img src="./IMG/users.jpg"></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../public/index.php?page=dashboardList">Afficher les utilisateurs</a>
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
            
    $results=Controller::$results;
    if(!empty($results))
                {
?>

<div class='row'>

    <div class="col px-4">
    
            <table class="table table-hover">
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
                
                    foreach($results as $result)
                    {
            ?>
            <tr>
                <td><?= $result->first_name?></td>
                <td><?= $result->last_name?></td>
                <td><?= $result->email?></td>
                <td><?= $result->role?></td>
                <td><a href="#">Modifier</a></td>
            </tr>
           <?php
                    }
                
           ?>
            </tbody>
        </table>
    </div>
</div>
           
   <?php
    }
    elseif(isset($_GET['action'])&& $_GET['action']==='addUser')
                {
                    Controller::viewPage('../view/section/addUserView.php');
                   
                }
        elseif(isset($_GET['action'])&& $_GET['action']==='modifyUser')
                {
                    Controller::viewPage('../view/section/modifyUserView.php');
                   
                    

                }
                
                                        
                                        
                                    

                            ?>
   </div>         

    <?php $content=ob_get_clean(); ?>

<?php require '../view/template/template_admin.php'; ?>
   

