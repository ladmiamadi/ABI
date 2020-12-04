<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif" href="../public/IMG/abi_logo.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
 
    <title><?=$title; ?></title>
</head>
<body>
    <div class="container-fluid px-0">
        <header class="container px-0 mt-3">
            <div class="socialNetwork">
                <ul class="d-flex list-unstyled ">
                    <li class="p-1 m-1"><a href="https://www.google.com" target='_blank'><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="p-1 m-1"><a href="https://www.google.com" target='_blank'><i class="fab fa-instagram"></i></a></li>
                    <li class="p-1 m-1"><a href="https://www.google.com" target='_blank'><i class="fab fa-facebook"></i></a></li>
                    <li class="p-1 m-1"><a href="https://www.google.com" target='_blank'><i class="fab fa-twitter"></i></a></li>
                </ul>

            </div>
            <div class="row logo mx-0 d-flex align-items-center">
                <div class="col p-4">
                    <a href="/index.php"><img alt="logo" src="../IMG/logo.png" class="img-fluid"></a>
                    
                </div>
                <div class="col mt-4 pt-4 text-left d-md-block d-none">
                    <h4 class="slogan">La force d'un groupe, la souplesse d'un réseau.</h4>
                </div>
                <!-- menu burger-->
                <div class="col-2 d-md-none d-block dropdown dropleft">
                    <img alt='menu-burger' src="../IMG/menu-burger.png" class="img-fluid icone" width="100%" data-toggle="dropdown">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/index.php">Acceuil</a>
                            <a class="dropdown-item" href="#">Groupe ABI</a>
                            <a class="dropdown-item" href="#">Actualité</a>
                            <a class="dropdown-item" href="#">Nos offres</a>
                            <a class="dropdown-item" href="#">Contact</a>
                        </div> 

                </div>
                <div class="col-2 d-md-none d-block">
                   <img alt="member" src="../IMG/member.png" class="img-fluid icone" width="100%"> 
                </div>

               
                
            </div>
            <hr class="my-0 py-0">
            <nav class="menu navbar navbar-expand d-none d-md-block">
                <ul class="navbar-nav d-flex justify-content-around">
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME']==='../index.php?page=home'):?> active <?php endif?>">
                        <a class="nav-link" href="../index.php?page=home">Accueil</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME']==='../index.php?page=ABIgroup'):?> active <?php endif?>">
                        <a class="nav-link" href="../index.php?page=ABIgroup">Groupe ABI</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME']==='../index.php?page=actuality'):?> active <?php endif?>">
                        <a class="nav-link" href="../index.php?page=actuality">Actualité</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME']==='../index.php?page=offer'):?> active <?php endif?>">
                        <a class="nav-link" href="../index.php?page=offer">Nos offres</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME']==='../index.php?page=contact'):?> active <?php endif?>">
                        <a class="nav-link" href="../index.php?page=contact">Contact</a>
                    </li>
                    <li class="nav-item espace-membre d-flex<?php if ($_SERVER['SCRIPT_NAME']==='../index.php?page=connexion'):?> active <?php endif?>">
                        <i class="fas fa-user-alt p-2 mt-1 connexion"></i><a class="nav-link" href="../index.php?page=connexion">Connexion</a>
                    </li>

                </ul>
               
                 
            </nav>
           
            
        </header>