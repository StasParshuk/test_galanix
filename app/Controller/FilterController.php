<?php

namespace Controller;

use Model\ModelCSV;

class FilterController
{
    public static function filter()
    {
        $column = explode("/", $_SERVER['REQUEST_URI']);
        $column = end($column);
      return  ModelCSV::all($column);
    }

    public static function filter_reverse()
    {
        $column = explode("/", $_SERVER['REQUEST_URI']);
        $column = end($column);

        return  ModelCSV::all($column," DESC");
    }

}
