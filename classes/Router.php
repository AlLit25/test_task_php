<?php

namespace classes;

class Router
{
    //
    public static function page (array $param): array {
        $result = [];
        if (intval($param['ID_FILM']) > 0) {
            $filmObj = new Film();
            $result = [
                'DATA'          => $filmObj->getDataFilm(intval($param['ID_FILM'])),
                'NAME_TEMPLATE' => 'templates/film_detail.php',
            ];
        }
        elseif (intval($param['DELETE_FILM']) > 0) {
            $filmObj = new Film();
            $filmObj->deleteFilm(intval($param['DELETE_FILM']));
            header('Location: /');
        }
        elseif ($param['ADD_FILM'] === 'Y') {
            $result = [
                'DATA'          => [],
                'NAME_TEMPLATE' => 'templates/add_film.php',
            ];
        }

        return $result;
    }
}