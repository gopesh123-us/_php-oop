<?php

class Dbh {

    private $host = 'us-cdbr-east-04.cleardb.com';
    private $user = 'bcf1fa758b4cb9';
    private $pwd = '7211c018';
    //private $dbName = 'oopphp16';
    private $dbName = 'heroku_15add86970fc744';

    protected function connect() {
        try {

            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Error! " . $e->getMessage() . '<br>';
            die();
        }
        return $pdo;
    }
}
