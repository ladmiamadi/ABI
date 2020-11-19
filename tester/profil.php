<?php
if(!empty($_POST['user']))
{
    setcookie('user', $_POST['user']);
}

require './header.php';
?>
<section class='container'>

<?php
if(!empty($_COOKIE['user']))
{
    echo 'bonjour'.$_POST['user'];
    
}


else
{

?>
    <form action='profil.php' method="POST">
                    <div class="form-group">
                        <label for="user">Identifiant ou Email: </label>
                        <input  class="form-control" type="text" name="user" id='user'>
                    </div>
                    <div>
                        <button type="submit" class='btn btn-success'>Valider</button>
                    </div>
    </form>
<?php
}
?>
</section>

<?php

require './footer.php';
?>