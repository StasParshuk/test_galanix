<?php

function redirect_home($error = null){
    return require_once "../view/page1.php";
}

function examination(array $data){
    $column = ["UID", "Name", "Age", "Email", "Phone", "Gender"];
    return $column == $data;
}