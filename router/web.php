<?php

namespace router;


use Controller\ControllerCSV;
use Controller\FilterController;

class web
{
    public static function router()
    {
        $url = trim($_SERVER['REQUEST_URI'], "/");
        $road = "/last/index.php";
        switch ($url) {

            case "import":
                $row = ControllerCSV::Load();

                break;
            case "clear":
                ControllerCSV::destroy();

                break;
            case "result":
                ControllerCSV::result();

                break;
            case "clear/filter/gender":
            case "clear/filter/phone":
            case "clear/filter/email":
            case "clear/filter/name":
            case "clear/filter/age":
            case "clear/filter/uid":
                FilterController::filter();

                break;
            case "clear/filter/reverse/email":
            case "clear/filter/reverse/age":
            case "clear/filter/reverse/name":
            case "clear/filter/reverse/phone":
            case "clear/filter/reverse/gender":
            case "clear/filter/reverse/uid":
                FilterController::filter_reverse();

                break;


            default:
                redirect_home();
        }
    }

}