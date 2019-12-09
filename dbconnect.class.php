<?php

    class BasesDonnees
    {
        private $dbhost = 'localhost';
        private $dbname = 'food';
        private $dbuser = 'root';
        private $dbpwd = '';
        
        public $cnx = null;

        public function connectDB()
        {
            try {
                $this->cnx = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpwd);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            return $this->cnx;
        }
    }