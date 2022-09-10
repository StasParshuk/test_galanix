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
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear":
                ControllerCSV::destroy();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "result":
                $row = ControllerCSV::result();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/uid":
                $row = FilterController::filter();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/age":
                $row = FilterController::filter();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/name":
                $row = FilterController::filter();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/email":
                $row = FilterController::filter();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/phone":
                $row = FilterController::filter();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/gender":
                $row = FilterController::filter();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/reverse/uid":
                $row = FilterController::filter_reverse();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/reverse/age":
                $row = FilterController::filter_reverse();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/reverse/name":
                $row = FilterController::filter_reverse();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/reverse/email":
                $row = FilterController::filter_reverse();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/reverse/phone":
                $row = FilterController::filter_reverse();
                require_once MAINDIR . '/view/page2.php';
                break;
            case "clear/filter/reverse/gender":
                $row = FilterController::filter_reverse();
                require_once MAINDIR . '/view/page2.php';
                break;


            default:
                redirect_home();
        }
    }

}