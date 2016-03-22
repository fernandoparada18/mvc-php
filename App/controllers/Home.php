<?php
namespace App\Controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\Models\User as Users,
    \Core\Controller;

class Home extends Controller
{

    public function index()
    {

    }

    /**
     * [test description]
     * @param  [type] $user [description]
     * @param  [type] $age  [description]
     * @return [type]       [description]
     */
    public function test($user, $age)
    {
        View::set("user", $user);
        View::set("title", "Custom MVC");
        View::render("home");
    }

    public function admin($name)
    {
        $users = Users::getAll();
        View::set("users", $users);
        View::set("title", "Custom MVC");
        View::render("admin");
    }

    public function user($id = 1)
    {
        $user = Users::getById($id);
        print_r($user);
    }

    public function insert()
    {
      if($_POST)
      {
        UserAdmin::insert($_POST['nombre']);
        header('Location:' . URL . 'home/admin');
      }
      else
      {
        View::set("uso", "Insertar");
        View::set("title", "Custom MVC");
        View::render("insert");
      }
    }

    public function update($id)
    {
      if($_POST)
      {
        $data = [ "id" => $_POST['id'], "nombre" => $_POST['nombre']];
        UserAdmin::update($data);
        header('Location:' . URL . 'home/admin');
      }
      else
      {
        $user = UserAdmin::getById($id);
        View::set("uso", "Editar");
        View::set("user", $user);
        View::set("title", "Custom MVC");
        View::render("insert");
      }
    }

    public function delete($id)
    {
        UserAdmin::delete($id);
        header('Location:' . URL . 'home/admin');
    }
}
