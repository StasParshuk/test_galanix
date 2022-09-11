<?php

function redirect_home(string $error = null)
{
    require_once "../view/page1.php";
    return exit();
}

function examination(array $data)
{
    $column = ["UID", "Name", "Age", "Email", "Phone", "Gender"];
    return $column == $data ? true :  redirect_home("неправильные поля");
}

function fileerror()
{
   return  $_FILES["CSV"]["error"] == 0 ?  true :  redirect_home("выберите файл");






}