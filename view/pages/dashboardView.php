<?php

use ABI\controller\Controller;

$title='Tableau de bord';
session_start();
if(!empty($_SESSION))
{
    $first_name=$_SESSION['first_name'];
    $last_name=$_SESSION['last_name'];
}
else
{
    header('Location:./index.php?page=connexion');
}
ob_start(); 
?>


<div class='row bonjour'>
        <div class='col'>
            <strong>Bonjour <?= $first_name.' '.$last_name; ?></strong>

        </div>

</div>

<div class="row">
        <div class="col">
            <a href="../public/index.php?page=dashboardList"><img src="../public/IMG/lister.png" height="250px" width="250px"></a>   
        </div>
        <div class="col pt-4">
            <img src="../public/IMG/modifier.png" class="afficher" height="200px" width="200px"> 
        </div>
        <div class="col">
            <img src="../public/IMG/ajouter.png" height="250px" width="250px"> 
        </div>
        <div class="col pt-4">
            <img src="../public/IMG/supprimer.png" height="200px" width="200px">
        </div>
</div>

<div class='row'>
            <div class="col-3">
                

            </div>
            <div class="col-1">
                   
                
            </div>
                <div class="col"></div>

        
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
                <th>Role</th>
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
                }
           ?>
            </tbody>
        </table>
    </div>
</div>
           
            

    <?php $content=ob_get_clean(); ?>

<?php require '../view/template/template_admin.php'; ?>
   

