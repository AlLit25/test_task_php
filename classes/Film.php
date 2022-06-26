<?php

namespace classes;

use PDO;

class Film extends \DbConnection
{
    public PDO $db;
    protected \DbConnection $connection;

    public function __construct()
    {
        $this->connection = new \DbConnection();
        $this->db = $this->connection->connect();
    }

    public function getAllFilms (): array
    {
        $stmt = $this->db->prepare('SELECT * FROM films ORDER BY name');
        $stmt->execute([]);
        $result = [];

        foreach ($stmt as $row)
        {
            $result[] = $row;
        }

        return $result;
    }

    public function getFilmByFilter (array $filter): array {

        switch ($filter['TYPE']) {
            case 'NAME':
                $query = "SELECT * FROM films WHERE name LIKE '%".$filter['DATA']."%' ORDER BY name;";
                break;
            case 'CAST_LIST':
                $query = "SELECT * FROM films WHERE cast_list LIKE '%".$filter['DATA']."%' ORDER BY name;";
                break;
            default:
                $query = "SELECT * FROM films ORDER BY name";

        }
        $stmt = $this->db->prepare($query);
        $stmt->execute([]);
        $result = [];

        foreach ($stmt as $row)
        {
            $result[] = $row;
        }

        return $result;
    }

    public function getDataFilm (int $idFilm): array
    {
        $stmt = $this->db->prepare('SELECT * FROM films WHERE id = ?');
        $stmt->execute([$idFilm]);
        $result = [];

        foreach ($stmt as $row)
        {
            $result[] = $row;
        }

        return $result[0];
    }

    public function deleteFilm (int $idFilm): void
    {
        $stmt = $this->db->prepare('DELETE FROM films WHERE id = ?');
        $stmt->execute([$idFilm]);
    }

    public function checkFieldBeforeAdd(array $param): array {
        $errorField = [];
        foreach ($param as $key => $value) {
            if (empty($value)) {
                $errorField[] = $key;
            }
        }

        return $errorField;
    }

    public function addNewFilm (array $param) {
        $stmt = $this->db->prepare('INSERT INTO `films` (`id`, `name`, `year_of_issue`, `format`, `cast_list`) 
                VALUES (NULL, ?, ?, ?, ?)');
        $stmt->execute([$param['NAME'], $param['YEAR'], $param['FORMAT'], $param['CAST_LIST']]);

        header('Location: /');
    }
    //INSERT INTO `films` (`id`, `name`, `year_of_issue`, `format`, `cast_list`) VALUES (NULL, 'film2', '2022', 'dvd', '1234');
}