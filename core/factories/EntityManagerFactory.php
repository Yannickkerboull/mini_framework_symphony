<?php

namespace core\factories;

use \PDO;

/**
 *
 */
class EntityManagerFactory
{

  static public function get($manager_type) {

      $db = new PDO('mysql:host=localhost;dbname=aston', 'root', '');
      $manager_class = '\bundles\\' . $manager_type . '\entity\\' . ucfirst($manager_type) . 'Manager';
      $entityManager = new $manager_class;
      $entityManager->injectDb($db);
      $entityManager->setTable($manager_type);

      return $entityManager;
  }
}
