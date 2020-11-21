
<div class="row w-75 p-4 mx-auto formAdd">
       <div class="col">
        <h4 class="text-center">Veuillez rensigner les champs ci-dessous:</h4>  
            <form action="../public/index.php?page=dashboard" method="POST">
                <div class="form-group">
                  <label for="first-name">
                    Prénom
                  </label>
                  <input type="text" name="first_name" id='first_name' class="form-control">  

                </div>
                <div class="form-group">
                  <label for="last_name">
                    Nom
                  </label>
                  <input type="text" name="last_name" id='last_name'class="form-control">  

                </div>
                <div class="form-group">
                  <label for="email">
                Email
                  </label>
                  <input type="text" name="email" id='email'class="form-control">  

                </div>
                <div class="form-group">
                  <label for="password">
                Mot de passe
                  </label>
                  <input type="password" name="password" id='password'class="form-control">  

                </div>
                <div class="form-group">
                  <label for="role">
                Rôle
                  </label>
                  <select name="role" id='role' class="form-control"> 
                        <option>Administrateur</option>
                        <option>Commercial</option>
                        <option>Directeur commercial</option>
                        <option>Directeur ressources humaines</option>
                  </select> 

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>

                

            </form>
       </div>