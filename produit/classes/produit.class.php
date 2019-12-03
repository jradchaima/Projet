<?php

    require 'dbconnect.class.php';


    class Produit
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function readAllProduct()
        {
            try {
                $req = 'SELECT * FROM produit';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneProduct($pid)
        {
            try {
                $req = 'SELECT * FROM produit WHERE pid= :prod_pid';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':prod_pid', $pid);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    



        public function updateProduct($pid,$nom, $description, $prix, $fichier)
        {
            try {
                $sql = 'UPDATE produit
                        SET nom = :prod_nom,
                           description = :prod_description,
                             prix = :prod_prix,
                            fichier = :prod_fichier
                        
                        WHERE pid = :prod_pid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":prod_pid", $pid);
                $result->bindparam(":prod_nom", $nom);
                $result->bindparam(":prod_description", $description);
                $result->bindparam(":prod_prix", $prix);
                $result->bindparam(":prod_fichier", $fichier);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteProduct($pid)
        {
            try {
                $sql = 'DELETE FROM produit WHERE pid = :prod_pid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":prod_pid", $pid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }