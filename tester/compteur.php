<?php
function ajouter_vue()
{

    $fichier=(__DIR__).DIRECTORY_SEPARATOR.'tester.txt';
    if(file_exists($fichier))
    {
        $compteur=(int)file_get_contents($fichier);
        $compteur++;
    }
    else
    {
        file_put_contents($fichier,1);
    }
}
function afficher_vues()
{
    $fichier=(__DIR__).DIRECTORY_SEPARATOR.'tester.txt';
    return file_get_contents($fichier);
}

?>