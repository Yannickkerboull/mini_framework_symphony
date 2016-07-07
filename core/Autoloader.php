<?php

namespace  core;

class Autoloader {

  static public function register() {


    $callback = array(
      __CLASS__,
      'autoload'
     );
    spl_autoload_register($callback);
  }

  static public function autoload($class) {

    $class = str_replace('\\', '/', $class) . '.php';
    require_once $class;
  }

}
