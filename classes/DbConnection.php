<?php

class DbConnection
{
    private string $user    = 'root';
    private string $pass    = '';
    private string $db      = 'test_webbylab';
    private string $host    = 'localhost';


    public function connect () {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);

            return $conn;
        } catch (PDOException $pe) {
            echo "Could not connect to the database $this->db :" .$pe->getMessage();
            return [];
        }
    }
}