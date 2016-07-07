<?php

namespace core\entity;

use \core\interfaces\ContentEntityInterface;
use  core\entity\EntityManager;

/**
 * class Entity
 *
 */
abstract class Entity implements ContentEntityInterface
{

  protected $manager;

  /**
   *
   * @access public
   */
  public $created;

  /**
   *
   * @access public
   */
  public $updated;

  public function injectManager(EntityManager $manager) {

    $this->manager = $manager;
  }

  public function getManager() {

    return $this->manager;
  }


  /**
   * Permet d'hydrate des objets d'entités.
   *
   * @return  $entity Object
   *          Object of Entity instance.
   * @access private
   */
  private function hydrate($data, $entity) {

    foreach ($data as $property => $value) {
      if (property_exists($entity, $property)) {
        $entity->$property = $value;
      }
    }

    return $entity;
  }

  /**
   *
   *
   * @return void
   * @access public
   */
  public static function create($data) {

    $entity = get_called_class();

    return self::hydrate($data, new $entity);
  } // end of member function create

  /**
   *
   *
   * @return void
   * @access public
   */
  public function delete() {
  } // end of member function delete

  /**
   * La méthode save permet de sauvegarder les informations de l'utilisateur
   * en base de donnée.
   *
   * @access public
   */
  public function save() {


    // $entity_class = get_class($this);   //  => UserEntity
    // $class = str_replace('Entity', 'Manager', $entity_class);   //  => UserManager
    // $manager = new $class($db);   //  => new UserManager($db)
    // $manager->flush($this);
    //
    // return $this;
  } // end of member function save

  /**
   *
   *
   * @return void
   * @access public
   */
  public function load($entity_id) {

    $entity_raw = $this->getManager()->getEntity($entity_id);
    return self::create($entity_raw);
  } // end of member function load



























} // end of Entity
