<?php
namespace classes;

use PDO;

class Login extends \DbConnection
{
    public PDO $db;
    protected \DbConnection $connection;

    public function __construct()
    {
        $this->connection = new \DbConnection();
        $this->db = $this->connection->connect();
    }

    public function signIn(string $login, string $pass) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE login = ?');
        $stmt->execute([$login]);
        $result = [];

        foreach ($stmt as $row)
        {
            $result[] = $row;
        }

        if (password_verify($pass, $result[0]['pass'])) {
            $_SESSION['ID_USER'] = $result[0]['id'];
        } else {
            $_SESSION['ERROR'] = 'Login and/or pass incorrect';
        }
    }
}