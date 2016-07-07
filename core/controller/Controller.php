<?php

namespace core\controller;

use core\factories\EntityFactory;
use core\TemplateEngine;

/**
 *
 */
abstract class Controller
{

  protected $service;
  protected $template_engine;

  public function injectEntityService(EntityFactory $factory) {
    $this->service = $factory;
  }

  public function injectTemplateEngine(TemplateEngine $templateEngine) {
    $this->template_engine = $templateEngine;
  }

  protected function render($template, $options) {

    $markup = $this->template_engine->createMarkup($template, $options);
    $this->template_engine->addBlock('content', $markup);
  }
}
