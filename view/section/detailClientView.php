<?php   
use ABI\controller\Buisness;


if(isset($_SESSION['id_client'])){
    
    
    $element=Buisness::showDetailClient($_SESSION['id_client']);
?>
<div class="row w-75 p-4 mx-auto formAdd">
       <div class="col">
        <h3 class="text-center mb-4 p-4">Détails du client</h3>  
        <form action="../public/index.php?page=buisness" method="POST" > 
                <div class="form-group">
                    <label for="secteurd">
                        Secteur d'activité
                    </label>
                    
                    <input name="id_clientd" id="id_clientd" value="<?=$_SESSION['id_client']?>" class="invisible" disabled>
                    
                    <input name="secteurd" disabled id='secteurd'class="form-control"
                            value="<?=$element->IDSECT ?>">
                
                    </div>
                <div class="form-group">
                  <label for="raison_socialed">
                    Raison Sociale
                  </label>
                  <input type="text" name="raison_socialed"  disabled id='raison_socialed' class="form-control" 
                        value="<?=$element->RAISONSOCIALE ?>">  

                </div>
               
                <div class="form-group">
                  <label for="adressed">
                Adresse
                  </label>
                  <input type="text" name="adressed" disabled id='adressed'class="form-control"
                            value="<?=$element->ADRESSECLIENT ?>">  

                </div>
                <div class="form-group">
                  <label for="code_postaled">
                Code Postale
                  </label>
                  <input type="text" name="code_postaled" disabled id='code_postaled'class="form-control"
                            value="<?=$element->CODEPOSTALCLIENT ?>">  

                </div>
                <div class="form-group">
                  <label for="villed">
                Ville
                  </label>
                  <input type='text' name="villed" disabled id='villed' class="form-control"
                        value="<?=$element->VILLECLIENT?>"> 
                     
                </div>
                <div class="form-group">
                  <label for="effectifd">
                Effectif
                  </label>
                  <input type='text' name="effectifd" disabled id='effectifd' class="form-control"
                            value="<?=$element->EFFECTIF ?>"> 
                     
                </div>
                <div class="form-group">
                  <label for="telephoned">
                Téléphone
                  </label>
                  <input type='text' name="telephoned" disabled id='telephoned' class="form-control"
                        value="<?=$element->TELEPHONECLIENT ?>"> 
                     
                </div>
                <div class="text-center mt-4 p-3">
                    <button type= "submit" class="btn btn-success valider d-none" name="update">Enregistrer</button>
                    
                    <button type="submit" class="btn btn-danger supprimer d-none" name="delete"onclick="return(confirm('Etes-vous sûr de vouloir supprimer ce client?'));">Supprimer</button>
                </div>

                
        </form>
        <div class="text-center mt-4"><button class="btn btn-primary modify" >Modifier</button></div>
            
       </div>

       <?php

}
?>