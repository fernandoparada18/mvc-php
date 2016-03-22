<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\models\User,
    \App\models\Admin\User as UserAdmin;

class Home {

    public function saludo($nombre){
      View::set("name", $nombre);
      View::set("title", "Custom MVC");
      View::render("home");
    }

    public function test(){
        $users = User::getAll();
        print_r($users);
    }

    public function users(){
      $users = UserAdmin::getAll();
      View::set("users", $users);
      View::set("title", "Custom MVC");
      View::render("users");
    }

    public function user($id = 1){
        $user = UserAdmin::getById($id);
        print_r($user);
    }

    public function insert(){
      if($_POST){
        UserAdmin::insert($_POST['nombre']);
        header('Location:' . URL . 'home/users');
      }else{
        View::set("uso", "Insertar");
        View::set("title", "Custom MVC");
        View::render("insert");
      }
    }

    public function update($id){
      if($_POST){
        $data = [ "id" => $_POST['id'], "nombre" => $_POST['nombre']];
        UserAdmin::update($data);
        header('Location:' . URL . 'home/users');
      }else{
        $user = UserAdmin::getById($id);
        View::set("uso", "Editar");
        View::set("user", $user);
        View::set("title", "Custom MVC");
        View::render("insert");
      }
    }

    public function delete($id){
        UserAdmin::delete($id);
        header('Location:' . URL . 'home/users');
    }
}
?>
