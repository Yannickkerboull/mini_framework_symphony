<?php

namespace core\factories;

use core\factories\EntityManagerFactory;

/**
 *
 */
class EntityFactory
{

  public function get($entity_type) {

    $manager_object = EntityManagerFactory::get($entity_type);
    $entity_class = '\bundles\\' . $entity_type . '\entity\\' . ucfirst($entity_type) . 'Entity';
    $entity_object = new $entity_class;
    $entity_object->injectManager($manager_object);

    return $entity_object;
  }
}
