<?php
use \ABI\controller\Controller;

?>
<div class="col client-view my-4 ml-2 mr-4">
<?php
                    if(isset($_GET['successAdd']))
                    {
                ?>
                    <div class="alert alert-success mt-4">
                           Client ajouté avec succés!

                    </div>
                <?php
                    }
                ?>
    <?php
if(isset($_GET['action']))
    {

                    if($_GET['action']==='clientList')
                    {
                        Controller::viewPage('../view/section/clientList.php');
                    }
                            
                    elseif($_GET['action']==='searchClient')
                    {
                        Controller::viewPage('../view/section/searchClientView.php');
                                
                    }
                    elseif($_GET['action']==='addClient')
                    {
                        Controller::viewPage('../view/section/addClientView.php');
                                
                    }
                    elseif($_GET['action']==='detailClient')
                    {
                        Controller::viewPage('../view/section/detailClientView.php');
                                
                    }
                   
                                            
    }
    ?>

</div>