<?php

namespace bundles\user\controller;

use \core\controller\Router;

/**
 *
 */
class UserRouter extends Router
{

  public function launchController() {

    $action = $this->getAction();

    switch ($action) {

      case 'view':

        $controller = $this->getController('user');
        $controller->viewAction($this->getParam('uid'));
        break;

      case 'edit':

        $controller = $router->getController();
        $controller->editAction($this->getParam('uid'));
        break;

      default:
        # code...
        break;
    }

  }
}
