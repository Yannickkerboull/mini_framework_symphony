<?php

namespace bundles\user\form;

/**
 * class FormLogin
 *
 */
class FormLogin extends Form
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   *
   * @access public
   */
  public $email = [
    'field' => 'input',
    'type' => 'email',
    'name' => 'email',
    'attributes' => [
      'placeholder' => 'Votre e-mail',
    ],
  ];

  /**
   *
   * @access public
   */
  public $pass = [
    'field' => 'input',
    'type' => 'password',
    'name' => 'pass',
    'attributes' => [
      'placeholder' => 'Votre pass',
    ],
  ];



} // end of FormLogin
?>
