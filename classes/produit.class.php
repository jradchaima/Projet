
    <?php

    require 'dbconnect.class.php';

    class produit
    { 
        private $conx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->conx = $db->connectDB();
        }

 function AjouterProduit($nom, $description, $prix, $fichier)
        {
            try {
                $sql = "INSERT INTO produit(nom,description,prix,fichier) VALUES (:prod_nom,:prod_description,:prod_prix,:prod_fichier)";
            $result = $this->conx->prepare($sql);
            $result->bindparam(":prod_nom", $nom);
            $result->bindparam(":prod_description", $description);
            $result->bindparam(":prod_prix", $prix);
            $result->bindparam(":prod_fichier", $fichier);
        
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

    }



 ?>