<?php
require '../header.php';
require_once '../tester/compteur.php';
ajouter_vue();
?>
<section class='container'>
    <p>
        il y'a: <?php echo afficher_vues();?> vues.
    </p>

</section>
<?php
require '../footer.php';
?>