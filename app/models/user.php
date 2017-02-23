<?php

namespace models;

class User {

  public function __construct()
  {

  }

  public function get($id)
  {
    if($id == 1) {
      return "Homer";
    } else {
      return "Bart";
    }
  }

}
