<?php

namespace bundles\user\controller;

use core\controller\Controller;

/**
 *
 */
class UserController extends Controller {

  public function viewAction($uid) {

    $user_entity = $this->service->get('user');
    $user = $user_entity->load($uid);

    return $this->render('bundles/user/views/user.html.php', array('user' => $user));
  }






}
