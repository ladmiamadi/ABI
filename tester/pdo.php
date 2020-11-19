<?php
require '../header.php';
?>
<section class="container">
<?php
//$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
try{
$dbd = new PDO('mysql:host=localhost;dbname=abi','root', '');
$dbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$resultat=$dbd->query('SELECT * FROM utilisateur');
}
catch(Exception $e)
{
    die('Erreur: '.$e->getMessage());
}



$affichage=$resultat->fetchAll(PDO::FETCH_OBJ);
?>

<ul>
    <?php
    foreach($affichage as $aff):?>
   <li><a href="./edit.php?id=<?= $aff->id_user ?>"><?= htmlentities($aff->first_name) ?></a></li> 
        <?php
        endforeach
    ?>
</ul>
<?php



?>

</section>

<?php
require '../footer.php';
?>