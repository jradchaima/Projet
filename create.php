<html>
<body>
    <?php
        if (isset($_POST['sub'])) {
            include './classes/vehicule.class.php';
            $vehicule = new vehicule;
            $vehicule->addNewVehicule($_POST['statut'], $_POST['vehicule_num']);
            header('Location:vindex.php?notif=add');
            exit();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Ajouter un nouveau vehicule</h3>
        </div>
        <fieldset>
            <legend>Nouveau vehicule</legend>
            <form action="" method="post">
               
                    
                       
                <br>
                   
                        <div class="form-group">
                            <label for="statut">Status de Vehicule</label>
                            <input type="text" required name="statut" class="form-control" id="statut">
                        </div>
                   
            
               <br>
                    
                        <div class="form-group" >
                            <label for="vehicule_num">Numero de Vehicule</label>
                            <input type="text" required name="vehicule_num" class="form-control" id="vehicule_num">
                        </div>
                   
                
                
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" name="sub" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
 </body>
 </html>