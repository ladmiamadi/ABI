<?php

use ABI\controller\Buisness;

$results=Buisness::viewClients();
    if(!empty($results))
                {
?>
<div class="row text-center p-4">
    <div class="col">
        <h3>Liste des client</h3>

    </div>
    


</div>
<div class='row mt-4'>

    <div class="col px-4">
    
            <table class="table table-hover">
            <thead>
            <tr class="row">
             
                <th class="col-2">Raison Sociale</th>
                <th class="col-2">Télephone</th>
                <th class="col">Adresse</th>
                <th class="col-2">Ville</th>
               
                <th class="col-2 text-center">Détails</th>
            </tr>
            </thead>
            <tbody>
            <?php
                
                    foreach($results as $result)
                    {
            ?>
            <tr class="row">
                
                
                <td class="col-2"><?= $result->RAISONSOCIALE?></td>
                <td class="col-2"><?= $result->TELEPHONECLIENT?></td>
                <td class="col"><?= $result->ADRESSECLIENT?></td>
                <td class="col-2"><?= $result->VILLECLIENT ?></td>
                
                <td class="col-2 text-center"><a href="./index.php?page=buisness&amp;action=detailClient&amp;detail="<?= $result->IDCLIENT ?>><i class="fas fa-info-circle"></i></a></td>
                
            </tr>
           <?php
                    }
                
           ?>
            </tbody>
        </table>
    </div>
</div>
           
   <?php
    }