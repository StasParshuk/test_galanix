<?php

namespace Controller;


use Model\ModelCSV;

class ControllerCSV
{
    public static function Load()
    {
//понимаю что получился тук можно было бы зарефакторить но много времени
        fileerror();
        $path = $_FILES["CSV"]['tmp_name'];
        $iter = 1;
        if (($handle = fopen($path, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($iter == 1) {
              examination($data);
                } else {
                    $row = ModelCSV::create_user($uid = $data[0], $name = $data[1], $age = $data[2], $email = $data[3], $phone = $data[4], $gender = $data[5]);
                }
                $iter++;
            }
            fclose($handle);
        } else return redirect_home("не формат");


        return require_once MAINDIR . '/view/page2.php';
    }


    public static function destroy()
    {
        ModelCSV::delete();
        require_once MAINDIR . '/view/page2.php';
    }

    public static function result()
    {
        $row = ModelCSV::all();
        return  require_once MAINDIR . '/view/page2.php';

    }


}