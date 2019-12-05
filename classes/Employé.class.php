<?php

    require 'dbconnect.class.php';

    class Employé
    {
        private $conx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->conx = $db->connectDB();
        }

        
   function readAllEmployés()
   {
       try {
           $req = 'SELECT * FROM employee';
           $result = $this->conx->prepare($req);
           $result->execute();
           return $result;
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
   }
   public function showOneEmployé($eid)
   {
       try {
           $req = 'SELECT * FROM employee WHERE eid= :clt_eid';
           $result = $this->conx->prepare($req);
           $result->bindParam(':clt_eid', $eid);
           $result->execute();
           return $result;
       } catch (PDOException $e) {
           echo $e->getMessage();
       }
   }

    function addNewEmployé($nom, $phno, $email, $mot_pasee)
   {
       try {
           $sql = "INSERT INTO employee(nom,phno,email,mot_pasee) VALUES (:clt_nom,:clt_phno,:clt_email,:clt_mot_pasee)";
            $result = $this->conx->prepare($sql);
            $result->bindparam(":clt_nom", $nom);
            $result->bindparam(":clt_phno", $phno);
            $result->bindparam(":clt_email", $email);
            $result->bindparam(":clt_mot_pasee",  $mot_pasee);
            $result->execute();
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
   }



   public function updateEmployé($eid, $nom, $phno, $email, $mot_pasee)
   {
       try {
           $sql = 'UPDATE employee
                   SET nom = :clt_nom,
                       phno = :clt_phno,
                       email = :clt_email,
                       mot_pasee = :clt_pasee
                   WHERE eid = :clt_id';
           $result = $this->conx->prepare($sql);
           $result->bindparam(":clt_id", $eid);
           $result->bindparam(":clt_nom", $nom);
           $result->bindparam(":clt_phno", $phno);
           $result->bindparam(":clt_email", $email);
           $result->bindparam(":clt_pasee", $mot_pasee);
        
           $result->execute();
           return $result;

       } catch (PDOException $exception) {
           echo $exception->getMessage();
       }
   }

   public function deleteEmployé($eid)
        {
            try {
                $sql = 'DELETE FROM employee WHERE eid = :clt_id';
                $result = $this->conx->prepare($sql);
                $result->bindparam(":clt_id", $eid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
    }