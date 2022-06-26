<?php
error_reporting(0);
/** page */
require_once "layout/header.php";
session_start();
use classes\{CommonFunction, Login, Film, Router, File};

$filmObj    = new Film();
$method     = $_SERVER['REQUEST_METHOD'];

if (isset($_POST['SEARCH_BY_NAME'])) {
    $searchData = [
        'TYPE' => 'NAME',
        'DATA' => $_POST['SEARCH_BY_NAME']
    ];
} elseif (isset($_POST['SEARCH_BY_ACTOR'])) {
    $searchData = [
        'TYPE' => 'CAST_LIST',
        'DATA' => $_POST['SEARCH_BY_ACTOR']
    ];
} elseif (isset($_POST['SEARCH_RESET'])) {
    $_POST = [];
    $searchData = [];
}

if (strtoupper($method) === 'POST') {
    if (!empty($_POST['ADD_FILM'])) {
        $resultCheck = $filmObj->checkFieldBeforeAdd($_POST['ADD_FILM']);
        if (empty($resultCheck)) {
            $filmObj->addNewFilm($_POST['ADD_FILM']);
        }
    }
    elseif (!empty($_FILES['IMPORT_FILE'])) {
        File::saveFile($_FILES['IMPORT_FILE']);
    }
    else {
        $login      = htmlspecialchars($_POST['LOGIN']);
        $pass       = htmlspecialchars($_POST['PASS']);
        $loginObj   = new Login();
        $loginObj->signIn($login, $pass);
    }
}

if (isset($_SESSION['UPLOAD_FILE_RESULT'])) {
    echo $_SESSION['UPLOAD_FILE_RESULT'];
    unset($_SESSION['UPLOAD_FILE_RESULT']);
}

if(CommonFunction::checkSignIn()) {

    if (empty($searchData)) {
        $allFilms   = $filmObj->getAllFilms();
    } else {
        $allFilms   = $filmObj->getFilmByFilter($searchData);
    }

    if(empty($_GET)) {
        require_once "templates/hello_page.php";
    } else {
        $pageParam      = Router::page($_GET);
        $filmDetail     = $pageParam['DATA'];
        $nameTemplate   = $pageParam['NAME_TEMPLATE'];
        require_once $nameTemplate;
    }
} else {
    require_once "templates/sign_in.php";
}

require_once "layout/footer.php";