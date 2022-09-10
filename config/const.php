<?php
const MAINDIR = __DIR__ . "/..";
const DB_HOST = "localhost";
const DB_NAME = "stas";
const DB_CHARSET = "utf8";
const DB_USER = "root";
CONST DB_PASSWORD = "";
const DB_DSN = "mysql:host=" . DB_HOST .";dbname=" . DB_NAME .";charset=". DB_CHARSET ;


//site url
define("SERVERPORT", (!empty($_SERVER["SERVER_PORT"]) ? ":" . $_SERVER['SERVER_PORT'] : "")) ;
define("SITEURL" ,$_SERVER["REQUEST_SCHEME"] . "://" .$_SERVER["SERVER_NAME"] . SERVERPORT );
define("ASSETSURL" ,SITEURL . '/assets');