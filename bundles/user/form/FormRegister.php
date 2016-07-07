<?php

namespace bundles\user\form;

/**
 * class FormLogin
 *
 */
class FormRegister extends Form
{


  private $mon_attribut;

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
      'require' => TRUE,
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
      'require' => TRUE,
    ],
  ];

  /**
   *
   * @access public
   */
  public $name = [
    'field' => 'input',
    'type' => 'text',
    'name' => 'name',
    'attributes' => [
      'placeholder' => 'Votre nom complet',
    ],
  ];

  /**
   *
   * @access public
   */
  public $localisation = [
    'field' => 'input',
    'type' => 'text',
    'name' => 'localisation',
    'attributes' => [
      'placeholder' => 'Votre Ville',
    ],
  ];

  /**
   *
   * @access public
   */
  public $age = [
    'field' => 'input',
    'type' => 'number',
    'name' => 'age',
    'attributes' => [
      'placeholder' => 'Votre age',
    ],
  ];











} // end of FormLogin
?>
