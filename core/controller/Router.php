<?php

namespace core\controller;

use core\factories\ControllerFactory;

/**
 *
 */
Abstract class Router {

  private $app = 'user';
  private $action = 'view';
  private $params = ['uid' => 1];

  final function __construct()
  {
    $app = isset($_GET['app']) ? $_GET['app'] : 'user';
    $this->setApp($app);
    $action = isset($_GET['action']) ? $_GET['action'] : 'user';
    $this->setAction($action);
    if (empty($_GET)){
      $get = ['uid' => 1];
    }else{
      $get = $_GET;
    }
    $this->setParams($get);
  }

  /*    SETTERS   */
  private function setApp($app) {
    $this->app = $app;
  }

  private function setAction($action) {
    $this->action = $action;
  }

  private function setParams($params) {

    foreach ($params as $param => $value) {

      if ($param != 'app' && $param != 'action') {
        $this->params[$param] = $value;
      }
    }
  }

  /*    GETTERS   */
  public function getApp() {
    return $this->app;
  }

  public function getAction() {
    return $this->action;
  }

  public function getParam($param) {
    return $this->params[$param];
  }

  /*    METHODS   */

  public function getController($type) {

    return ControllerFactory::get($type);
  }





}
