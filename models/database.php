<?php

class Database
{
    // name of the database
    private $dbname = 'proProject';
    // username to connect to the database
    private $username = '2Fimmobilier';
    // password to connect to the database
    private $password = 'Austr@l1e76!';

    protected function connectDatabase()
    {
        try {
            $database = new PDO("mysql:host=localhost;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            // DEBUG MODE //
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // DEBUG MODE //
            return $database;
        } catch (PDOException $errorMessage) {
            die('error : ' . $errorMessage->getMessage());
        }
    }
}
