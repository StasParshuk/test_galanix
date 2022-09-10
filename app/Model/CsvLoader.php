<?php

namespace Model;


use config\ORM;

class CsvLoader
{
    public static function Load()
    {
        if (!empty($_FILES)) {
            $path = $_FILES["CSV"]['tmp_name'];
            $row = 1;
            if (($handle = fopen($path, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                    if ($row == 1) {
                        if (examination($data) !== true){
                            $error = "неправильніе поля";
                           return redirect_home($error)  ;

                        }
                    }



                    else  {

                            ORM::create_user($uid = $data[0], $name = $data[1], $age = $data[2], $email = $data[3], $phone = $data[4], $gender = $data[5]);
                        }




                    $row++;
                }
            } else return redirect_home();
            fclose($handle);
        }
    }


    public static function destroy()
    {
    }

    public static function result()
    {
    }
}