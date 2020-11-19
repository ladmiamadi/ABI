<?php
require('./header.php');
require_once('./config.php');
require_once('./functions.php')
?>

<section class='container'>

<h2>Horaires d'ouverture:</h2>

<ul>
    <?php
    echo date('N');
    foreach(JOUR as $k=>$jour)
    {
        
       echo "<li>".$jour.": ".creneaux_html(CRENEAU[$k])."</li>";

        
    }
    ?>
</ul>

</section>
<?php
require('./footer.php');
?>