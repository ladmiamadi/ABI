<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="Description" content="Enter your description here"/>
<link rel="icon" type="image/gif" href="../public/IMG/abi_logo.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="../public/styles/dashboard.css">
<title><?= $title ?></title>
</head>
<body>

<div class='container-fluid'>
 
    <header class='container'>
       <div class='row mt-4'>
            <div class='col p-4'>
                <a href="index.php?page=dashboard" data-toggle="tooltip" title="Accueil"><img src="./IMG/home.png" width="100px" height="100px"></a>
            </div>
            <div class='col p-4'>
                <ul class="nav flex-column text-center">
                   <li><a class="" href="./index.php?page=buisness"><img src="./IMG/commercial.png"class="gestion"></a></li>
                   <li><a href="./index.php?page=buisness" class="nav-link">Gestion commerciale</a></li> 
                </ul>
                
            </div>
            <div class='col p-4'>
            
            <ul class="nav flex-column text-center">
                   <li><a class="" href="gestion_rh.php"><img src="./IMG/RH.png" class="gestion"></a></li>
                   <li><a href='#' class="nav-link">Gestion RH</a></li> 
                </ul>
            </div>
            <div class="col p-4">
            <ul class="nav flex-column text-center">
                   <li><a class="" href="gestion_projets.php"><img src="./IMG/projet.png"class="gestion"></a></li>
                   <li><a href="#" class="nav-link">Gestion des projets</a></li> 
                </ul>
            
           
            </div>
                           
                           
            

       </div> 
        

</header>

