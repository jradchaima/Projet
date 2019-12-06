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
                $req = 'SELECT * FROM véhicule';
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
                $req = 'SELECT * FROM véhicule WHERE vid= :vid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':vid', $vid);
               
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }


        public function updatevehicule($vid,$status,$vehicule_num)
        {
            try {
                $sql = 'UPDATE véhicule
                        SET status = :clt_status,
                        SET vehicule_num = :clt_vehicule   
                        WHERE vid = :vid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":vid", $vid);
                $result->bindparam(":clt_status", $status);
                $result->bindparam(":clt_vehicule", $vehicule_num);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }



    
        public function addNewVehicule($status,$vehicule_num)
        {
            try {
                $sql = "INSERT INTO véhicule(vid,status,vehicule_num) VALUES (:prod_vid,:prod_status,:prod_vehiculenum)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":prod_vid", $vid);
            $result->bindparam(":prod_status", $status);
            $result->bindparam(":prod_vehiculenum", $vehicule_num);
        
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function deleteVehicule($vid)
        {
            try {
                $sql = 'DELETE FROM véhicule WHERE vid = :prod_vid';
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
  