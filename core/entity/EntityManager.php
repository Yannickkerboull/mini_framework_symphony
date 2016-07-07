<?php

namespace core\entity;

abstract class EntityManager {

  protected $db;
  protected $table;

  public function injectDb($db) {

    $this->db = $db;
  }

  public function setTable($table) {

    $this->table = $table;
  }

  public function flush(ContentEntityInterface $entity) {

    if ($entity->id) {
      // UPDATE
    }
    else {

      $query_string = 'INSERT INTO {$this->table} (';
      $properties = [];

      foreach ($entity as $key => $value) {
        $properties[] = $value;
      }

      $query_string .= implode(', ', $properties) . ') VALUES (';

      // $query = $this->_db->prepare('
      //   INSERT
      //   INTO user (name, email, localisation, age, `create`, `update`)
      //   VALUES (:name, :email, :localisation, :age, NOW(), NOW())');
      //
      // $query->bindParam(':name', $user->name);
      // $query->bindParam(':email', $user->email);
      // $query->bindParam(':localisation', $user->localisation);
      // $query->bindParam(':age', $user->age);
      // $query->execute();
    }
  }

  public function getEntity($entity_id) {

    if ((int) $entity_id > 0) {

      $query_string = "SELECT * FROM {$this->table} WHERE id=:id";
      $query = $this->db->prepare($query_string);
      $query->bindValue(':id', $entity_id);
      $query->execute();
      $result = $query->fetch(\PDO::FETCH_ASSOC);

      return $result;
    }
  }











}
