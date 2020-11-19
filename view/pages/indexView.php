<?php $title='Acceuil'; ?>
<?php ob_start(); ?>

<div class="px-0 mx-0 d-none d-md-block banniere">
                        <img class="w-100" alt="banniere" src="./IMG/solutions-informatiques.jpg" height="300px">
                </div>
                <div class="row mx-0">

               
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8 col-12 text-center py-4 px-4">
                        <h2 class="titre-section text-center">ABI: Votre réseau d’ESN</h2>
                        <p class="paragraph-section text-center">
                            Depuis plus de dix ans, ABI apporte des solutions informatiques performantes et pérennes à ses clients. PME-PMI, grands comptes et administrations font appel aux SSII membre de ce groupement d’intérêts économiques.

                            Ce réseau d’expertises informatiques est unique en France.
                        </p>
                        <button class="btn btn-primary">DÉCOUVRIR ABI</button>

                    </div>
                    <div class="col-md-2">

                    </div>  

                </div>
                
                <div class="row rejoindre px-0 mx-0">
                    <div class="col-12 col-md-6 mx-0 px-0">
                        <img class="" alt="equipeABI" src="./IMG/personnel.jpg" width="100%">
                    </div>
                    <div class="col-12 col-md-6 text-center p-4">
                        <h3 class="titre-rejoindre">Rejoignez le groupe ABI</h3>
                        <p class="paragraphe-rejoindre">
                            Nos sociétés informatiques évoluent dans des secteurs d’activités connexes 
                            et complémentaires. ABI représente plus de 250 collaborateurs qui œuvrent 
                            pour des milliers de clients.
                        </p>
                        <button class="btn btn-primary">Rejoindre ABI</button>
                    </div>

                </div>
                <div class="row rejoindre px-0 mx-0">
                    <div class="col-12 col-md-6 text-center p-4">
                        <h3 class="titre-rejoindre">Un réseau local et national</h3>
                        <p class="paragraphe-rejoindre">
                            Avec des implantations à travers la France et les Dom-Tom, il y a toujours un expert ABI proche de vous. 
                            Nos équipes s’entraident pour conjuguer proximité locale et capacité d’action au niveau national.
                        </p>
                        
                    </div>
                    <div class="col-12 col-md-6 mx-0 px-0">
                        <img class="" alt="reseau-ABI" src="./IMG/reseau.jpg" width="100%">
                    </div>
                    

                </div>
<?php $content=ob_get_clean(); ?>

<?php require '../view/template/template.php'; ?>
