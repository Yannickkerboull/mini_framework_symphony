<?php

namespace bundles\user\entity;

use core\entity\Entity;

/**
 * class User
 *
 */
class UserEntity extends Entity
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   *
   * @access public
   */
  public $id;

  /**
   *
   * @access public
   */
  public $name;

  /**
   *
   * @access public
   */
  public $email;

  /**
   *
   * @access public
   */
  public $localisation;

  /**
   *
   * @access public
   */
  public $age;

  /**
   *
   * @access public
   */
  public $role;


  /**
   *
   *
   * @return void
   * @access public
   */
  public function connect() {
  } // end of member function connect

  /**
   *
   *
   * @return void
   * @access public
   */
  public function logout() {
  } // end of member function logout

} // end of User
