<?php

    require 'dbconnect.class.php';


    class vehicule
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function readAllvehicules()
        {
            try {
                $req = 'SELECT * FROM vehicule';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }

        }

        public function showOnevehicule($vid)
        {
            try {
                $req = 'SELECT * FROM vehicule WHERE vid= :vid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':vid', $vid);
               
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        public function addNewVehicule($statut,$vehicule_num)
        {
            try {
                $sql = "INSERT INTO vehicule(vid,statut,vehicule_num) VALUES (:prod_vid,:prod_statut,:prod_vehiculenum)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":prod_vid", $vid);
            $result->bindparam(":prod_statut", $statut);
            $result->bindparam(":prod_vehiculenum", $vehicule_num);
        
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updatevehicule($vid, $statut, $vehicule_num)
        {
            try {
                $sql = 'UPDATE vehicule
                        SET statut = :clt_statut,
                            vehicule_num = :clt_vehicule_num
                            
                        WHERE vid = :clt_vid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_vid", $vid);
                $result->bindparam(":clt_statut", $statut);
                $result->bindparam(":clt_vehicule_num", $vehicule_num);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
     
     
     




    
       

        public function deleteVehicule($vid)
        {
            try {
                $sql = 'DELETE FROM vehicule WHERE vid= :prod_vid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":prod_vid", $vid);
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
    }
?>
  