<?php

namespace Controller;

use Model\ModelCSV;

class FilterController
{
    public static function filter()
    {
        $column = explode("/", $_SERVER['REQUEST_URI']);
        $column = end($column);
        $row = ModelCSV::all($column);
        return require_once MAINDIR . '/view/page2.php';
    }

    public static function filter_reverse()
    {
        $column = explode("/", $_SERVER['REQUEST_URI']);
        $column = end($column);

        $row = ModelCSV::all($column, " DESC");
        return require_once MAINDIR . '/view/page2.php';
    }

}
