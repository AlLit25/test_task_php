<?php

namespace classes;

class CommonFunction
{
    public static function dump ($data):void
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    /**  */
    public static function checkSignIn (): bool
    {
        if (empty($_SESSION)) {
            return 0;
        } else {
            $idUser = intval($_SESSION['ID_USER']) ?? 0;
            return  $idUser;
        }
    }
}
