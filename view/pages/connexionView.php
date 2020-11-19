<?php $title='Se connecter'; ?>

<?php ob_start() ?>
<div class='section-form pb-5'>
    <hr class="my-0 py-0">
           <div class="container formulaire mt-5 w-75 py-5">
               <form action="./index.php?page=dashboard" method="POST">
                   <div class="form-group">
                        <label for="email">Identifiant ou Email: </label>
                        <input  class="form-control" type="text" name="email" id='email'>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe: </label>
                        <input class="form-control" type="text" name="password" id='password'>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input mt-2" type="checkbox"> Se souvenir de moi
                        </label>
                    <div class="mt-4 text-center bouttons">
                        <button type="submit" class="btn btn-success">Connexion</button>
                        <button class="btn btn-danger ml-4">Mot de passe oublié?</button>
                    </div>
               </form>

           </div> 
</div>

<?php $content=ob_get_clean(); ?>

<?php require '../view/template/template.php'; ?>