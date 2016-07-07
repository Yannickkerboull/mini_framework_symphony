<?php

namespace core\factories;

  /**
   *
   */
  Abstract class RouterFactory
  {

    static public function getInstance() {
      $type =  isset($_GET['app']) ? $_GET['app'] : 'user';

      $class = '\bundles\\' . $type . '\controller\\' . ucfirst($type) . 'Router';
      return new $class;
    }
  }
