<?php
require_once './classes/Message.php';
require '../header.php';
require_once './classes/GoldenBook.php';
$errors=null;
$success=false;
if (isset($_POST['username']) && isset($_POST['message']))
{
    $message= new Message($_POST['username'], $_POST['message']);
    if($message->isValid())
    {
        $goldenBook= new GoldenBook(__DIR__.DIRECTORY_SEPARATOR.'messages');
        $goldenBook->addMessage($message);
        $success=true;
        $_POST=[];
    }
    else
    {
        $errors=$message->getErrors();
        

    }
}
?>
<?php

?>
<section class='container'>
    <?php
    if(!empty($errors))
    {
        ?>
            <div class="alert alert-danger">
                
                Votre formulaire est invalide!
            </div>
        <?php
        
    }
    ?>
     <?php
    if($success)
    {
        ?>
            <div class="alert alert-success">
                
                Votre message a été posté avec succés
            </div>
        <?php
        
    }
    ?>
    <form action="" method="POST">
    <div class="form-group">
                        <label for="username">Identifiant: </label>
                        <input value="<?= $_POST['username']?? ''; ?>" class="form-control" type="text" name="username"
                        placeholder="votre pseudo" id='user'>
                        <?php
                        if(isset($errors["username"])):
                        
                        ?>
                        <div class="alert alert-danger"><?= $errors['username'] ?></div>
                        <?php
                        endif

                        ?>
                        
                    </div>
                   
                        <div class="form-group">
                            <label for="message">Message </label>
                            <input value="<?= $_POST['message']?? ''; ?>" class="form-control" type="textarea" name="message" 
                        placeholder="votre message" id='message'>
                            <?php
                        if(isset($errors['message']))
                        {
                        ?>
                        <div class="alert alert-danger"><?php echo $errors['message'];?></div>
                        <?php
                        }

                        ?>
                        </div>
                        
                    <button type="submit" class="btn btn-success">Connexion</button>

    </form>
    <h2>Messages:</h2>
    <?php
    if(!empty($messages))
    { echo ($messages);
        foreach($messages as $mess)
        {
            
            echo $mess->toHtml();
        }
    }
    ?>

</section>

<?php
require '../footer.php';
?>