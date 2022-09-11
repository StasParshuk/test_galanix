<?php

namespace Model;

use config\DB;
use PDO;

class ModelCSV
{

    public static function delete(): object|string
    {
        $query = "delete from CSV";
        $query = DB::connect()->prepare($query);


        return $query->execute();

    }

    public static function all($column = null, $reverse = null): object|array
    {
        $query = "select * from CSV ";
        if (!empty($column)) {
            $query .= "ORDER BY " . $column;
            if (!empty($reverse)) {
                $query .= $reverse;
            }
        }
        return DB::connect()->query($query)->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    public static function create_user(string $UID, string $Name, string $Age, string $Email, string $Phone, string $Gender)
    {
        $query = "INSERT INTO CSV " . " (UID, Name, Age, Email, Phone,Gender)  VALUES (?, ?, ?, ?, ?, ?) " . "on duplicate key update UID = values(UID)";
        $query = DB::connect()->prepare($query);
        $query->bindValue(1, $UID, PDO::PARAM_STR);
        $query->bindValue(2, $Name, PDO::PARAM_STR);
        $query->bindValue(3, $Age, PDO::PARAM_STR);
        $query->bindValue(4, $Email, PDO::PARAM_STR);
        $query->bindValue(5, $Phone, PDO::PARAM_STR);
        $query->bindValue(6, $Gender, PDO::PARAM_STR);
        $query->execute();
        $query = "select * from CSV ";
        return DB::connect()->query($query)->fetchAll(PDO::FETCH_CLASS, static::class);


    }

    public static function order_by(string $column) : object|array
    {
        $query = "SELECT * FROM CSV ORDER BY " . $column;
        return DB::connect()->query($query)->fetchAll(PDO::FETCH_CLASS, static::class);
    }
}
