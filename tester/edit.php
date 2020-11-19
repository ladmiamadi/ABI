<?php
require '../header.php';
$success=false;
try{
    $dbd = new PDO('mysql:host=localhost;dbname=abi','root', '');
    $dbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultat=$dbd->prepare('SELECT * FROM utilisateur WHERE id_user= :id');
    $resultat->execute([
        'id'=>$_GET['id']
    ]);
    if(isset($_POST['first_name'])&& isset($_POST['password']))
    {
        $req= $dbd->prepare('UPDATE utilisateur SET first_name= :name, password= :pass WHERE id_user=:id');
        $req->execute([
            'name'=>$_POST['first_name'],
            'pass'=>$_POST['password'],
            'id'=>$_GET['id']
        ]);
        $success=true;
    }
    }
    catch(Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
    $affichage=$resultat->fetch(PDO::FETCH_OBJ);
?>
<section class="container">
<p>
    <a href="./pdo.php">Revenir au listing</a>
</p>
<form action="" method="POST">
    <?php
    if($success):
    ?>
    <div class="alert alert-success">
        votre table a été mise à jour avec succés!
    </div>
    <?php
    endif
    ?>
    <div class="form-group">
        <input class="form-control" type="text" value="<?=htmlentities($affichage->first_name) ?>" name="first_name"> 
    </div>
    <div class="form-group">
        <input class="form-control" type="text" value="<?=htmlentities($affichage->password) ?>" name="password"> 
    </div>
    <button class="btn btn-primary">Enregistrer</button>
   

</form>
</section>

<?php
require '../footer.php';

?>