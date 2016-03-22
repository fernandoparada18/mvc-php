<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

class User{

    public static function getAll(){
      return ["id" => 1, "nombre" => "Israel"];
    }

}
?>
