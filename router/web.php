<?php
namespace router;




use Controller\ControllerCSV;

class web
{
    public static function router(){
        $url = trim($_SERVER['REQUEST_URI'],"/");
        $road = "/last/index.php";
        switch ($url){

            case "import":
               ControllerCSV::Load();
                break;
            case "clear":
                ControllerCSV::destroy();
                require_once MAINDIR . '/view/page2.php';
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