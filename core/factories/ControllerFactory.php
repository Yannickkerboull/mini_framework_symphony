<?php

namespace core\factories;

use core\TemplateEngine;

/**
 *
 */
class ControllerFactory
{

  static public function get($controller_type) {

    $factory_entity = new EntityFactory();
    $controller_class = '\bundles\\' . $controller_type . '\controller\\' . ucfirst($controller_type) . 'Controller';

    $templateEngine = TemplateEngine::getInstance();
    $controller = new $controller_class;

    $controller->injectTemplateEngine($templateEngine);
    $controller->injectEntityService($factory_entity);

    return $controller;
  }
}
