<?php
namespace router;


use Model\CsvLoader;

class web
{
    public static function router(){
        $url = trim($_SERVER['REQUEST_URI'],"/");
        $road = "/last/index.php";
        switch ($url){

            case "import":
               CsvLoader::Load();
                break;
            case "clear":
                require_once MAINDIR . '/page1/Clearall';
                break;
            case "result":
                require_once MAINDIR . '/view/page2.php';
                break;
            case "last/index.php/account":
                break;
            default:
                redirect_home();
        }
    }

}