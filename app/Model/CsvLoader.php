<?php

namespace Model;

class CsvLoader
{
    public static function Load()
    {


            if (!empty($_FILES)) {
                $path = $_FILES["CSV"]['tmp_name'];
                $row = 1;
                if (($handle = fopen($path, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle)) !== FALSE) {
                        dump($data);
                    }
                    }
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