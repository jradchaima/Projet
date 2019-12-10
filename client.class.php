<?php

    require 'dbconnect.class.php';

    class Client
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function readAllClients()
        {
            try {
                $req = 'SELECT * FROM clients';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneClient($cid)
        {
            try {
                $req = 'SELECT * FROM clients WHERE id= :clt_id';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_id', $id);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewClient($name, $email, $phone, $adresse, $pwd)
        {
            $sql = "INSERT INTO client(nom,email,pwd,phone,adresse) VALUES (:clt_nom,:clt_email,:clt_pwd,:clt_tel,:clt_adr)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":clt_nom", $name);
            $result->bindparam(":clt_email", $email);
            $result->bindparam(":clt_pwd", $pwd);
            $result->bindparam(":clt_adr", $adresse);
            $result->bindparam(":clt_tel", $phone);
            if($result->execute()){
            return $result;}else{
                return null;
            }
        }

        public function updateClient($id, $nom, $prenom, $dateBirth, $adr, $tel)
        {
            try {
                $sql = 'UPDATE clients
                        SET nom = :clt_nom,
                            prenom = :clt_prenom,
                            datenaissance = :clt_dateN,
                            adresse = :clt_adr,
                            tel = :clt_tel
                        WHERE id = :clt_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id", $id);
                $result->bindparam(":clt_nom", $nom);
                $result->bindparam(":clt_prenom", $prenom);
                $result->bindparam(":clt_dateN", $dateBirth);
                $result->bindparam(":clt_adr", $adr);
                $result->bindparam(":clt_tel", $tel);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteClient($id)
        {
            try {
                $sql = 'DELETE FROM clients WHERE id = :clt_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id", $id);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }