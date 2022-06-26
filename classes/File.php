<?php

namespace classes;

class File
{
    public static function saveFile(array $param) {
        $fileTmpPath    = $param['tmp_name'];
        $fileName       = $param['name'];
        $fileNameCmps   = explode(".", $fileName);
        $fileExtension  = strtolower(end($fileNameCmps));

        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        if ($fileExtension === 'txt') {
            $uploadFileDir = './Files/';
            $dest_path = $uploadFileDir . $newFileName;

            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
                $message ='File is successfully uploaded.';
                $dataFromFile = self::parseDataFromFile($dest_path);
                self::insertToDb($dataFromFile);
            }
            else
            {
                $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
            }
            $_SESSION['UPLOAD_FILE_RESULT'] = $message;
            header('Location: /');
        }
    }

    protected static function insertToDb (array $data) {
        $film = new Film();
        foreach ($data as $paramFilm) {
            $film->addNewFilm($paramFilm);
        }
    }

    protected static function parseDataFromFile(string $file): array {
        $strFromFile = file_get_contents($file);
        $arrDataFilms = explode("\n\n", $strFromFile);
        $dataFilms = [];
        $resultArr = [];

        foreach ($arrDataFilms as $dataFilm) {
            $dataFilms[] = explode("\n", $dataFilm);
        }

        foreach ($dataFilms as $key => $paramFilm) {
            foreach ($paramFilm as $param) {
                $buff = self::parseStrParam($param);
                if (!empty($buff)) {
                    $resultArr[$key][$buff[0]] = $buff[1];
                }
            }
        }

        return $resultArr;
    }

    protected static function parseStrParam(string $strParam): array
    {
        $dataParam = explode(':', $strParam);

        switch (trim($dataParam[0])) {
            case 'Title':
                return ['NAME', trim(end($dataParam))];
            case 'Release Year':
                return ['YEAR', trim(end($dataParam))];
            case 'Format':
                return ['FORMAT', trim(end($dataParam))];
            case 'Stars':
                return ['CAST_LIST', trim(end($dataParam))];
            default:
                return [];
        }
    }
}