<?php

namespace core;


/**
 *
 */
class TemplateEngine
{

  private static $_instance = NULL;
  public $blocks;

  static public function getInstance() {

    // Singleton.
    if (is_null(self::$_instance)) {
      self::$_instance = new TemplateEngine;
    }
    return self::$_instance;
  }

  public function addBlock($name, $markup) {

    $this->blocks[$name] = $markup;
  }

  public function createMarkup($template, $options) {

    $variables = $options;

    ob_start();

    include $template;

    $markup = ob_get_clean();
    return $markup;
  }

  public function deployHtml() {


    ob_start();

    $blocks = $this->blocks;

    //include 'core/views/base.html.php';
    include 'core/views/base1.html.php';

    $markup = ob_get_clean();
    print $markup;
  }







}
