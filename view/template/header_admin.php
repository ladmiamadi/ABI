<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="../public/styles/dashboard.css">
<title><?= $title ?></title>
</head>
<body>

<div class='container-fluid'>
 
    <header class='container'>
       <div class='row mt-4'>
            <div class='col-4 text-left'>
                <a href="index.php?page=dashboard" data-toggle="tooltip" title="Accueil"><img src="../public/IMG/home (1).png" width="100px" height="100px" class="img-fluid"></a>
            </div>
            <div class='col-4 text-center dropdown'>
                <a href="#" title="Menu" data-toggle='dropdown'><img alt='Afficher le menu' src="../public/IMG/menu-burger.png" width="100px" height="100px" class="img-fluid"
                ></a>
                <div class="dropdown-menu">
                            
                            <a class="dropdown-item" href="gestion_commerciale.php">Gestion commerciale</a>
                            <a class="dropdown-item" href="gestion_rh.php">Gestion RH</a>
                            <a class="dropdown-item" href="gestion_projets.php">Gestion des projets</a>
                            <a class="dropdown-item" href="../public/index.php">Accéder au site</a>
                        </div>
            </div>
            <div class='col-4 text-right'>
                <a href="./index.php?page=logOut" data-toggle="tooltip" title="Se déconnecter"><img alt="Déconnexion"src="../public/IMG/deconnexion.png" width="100px" height="100px" class="img-fluid"></a>
            </div>

       </div> 
        

</header>
