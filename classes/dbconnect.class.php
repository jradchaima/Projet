<?php


class BasesDonnees
{
    private $dbhost = 'localhost';
    private $dbname = 'foood_ordering';
    private $dbuser = 'root';
    private $dbpwd = '';
    
    public $conx = null;

    public function connectDB()
    {
        try {
            $conx = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $conx;
    }
}