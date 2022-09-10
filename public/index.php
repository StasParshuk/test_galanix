<?php


use config\DB;
use router\web;

require_once __DIR__ . "/setting.php";

dd(DB::connect());

web::router();
