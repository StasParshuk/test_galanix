<?php


use config\DB;
use router\web;

require_once __DIR__ . "/setting.php";
if (!empty($_POST)){
    dd($_POST);
}
web::router();
