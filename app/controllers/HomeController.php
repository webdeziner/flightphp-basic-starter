<?php

namespace controllers;

class HomeController {

  public $name = "";
  public function __construct()
  {
    $this->name = "Homer";
  }

  public function index()
  {
    \Flight::render('index.view', ['name' => $this->name]);
  }

  public function login()
  {
    $data = \Flight::request()->data;
    Flight::json(['username' => $data->username, 'password' => $data->password]);
  }

  public function user($id)
  {
    $user = new \models\User();
    $name = $user->get($id);
    \Flight::render('user.view', ['name' => $name]);
  }

}
