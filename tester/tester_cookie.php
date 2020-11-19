<?php
if(empty($_COOKIE['age'])&& isset($_POST['age']))
{
    setcookie('age', htmlentities($_POST['age']));
}
require '../header.php';

?>
<section class='container'>

<?php

if(!empty($_POST['age']))
{

    $age=date('Y')-htmlentities($_POST['age']);
    if($age>=18)
    {
    
    echo 'bonjour votre age est: '.$age.' ans';
    }
    else
    {
        echo 'vous n\'avez pas 18  ans!!';
        $age=null;
        
    }
}
else
{


?>
    <h2>Selectionnez votre age:</h2>
    <form action="tester_cookie.php" method="POST">
<div>
    <select class='form-group' name="age" id="age">
        <?php
        for($i=1930; $i<=2010; $i++)
        {
            echo '<option>'.$i.'</option>';
        }
        ?>
    </select>
    </div>

    <button class='btn btn-success'>Valider</button>
    </form>
<?php
}
?>
</section>

<?php
require '../footer.php';
?>