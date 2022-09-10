<?php

namespace Controller;





use Model\ModelCSV;

class ControllerCSV
{
    public static function Load()
    {
//d
//понимаю что получился тук можно было бы зарефакторить но много времени
        if ($_FILES["CSV"]["error" ] == 0) {
            $path = $_FILES["CSV"]['tmp_name'];
            $row = 1;
            if (($handle = fopen($path, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if ($row == 1) {
                        if (examination($data) !== true) {
                            $error = "неправильные поля";
                            return redirect_home($error);
                        }
                    } else {
                        ModelCSV::create_user($uid = $data[0], $name = $data[1], $age = $data[2], $email = $data[3], $phone = $data[4], $gender = $data[5]);
                    }
                    $row++;
                }
            } else return redirect_home();
            fclose($handle);
            return require_once MAINDIR . "/view/page2.php";
        } else return redirect_home("выберите файл");
    }


    public static function destroy()
    {
        ModelCSV::delete();
    }

    public static function result()
    {
        return ModelCSV::all();
    }
}