<?php

namespace core\interfaces;

/**
 * interface ContentEntityInterface
 *
 */
interface ContentEntityInterface
{

  public static function create($data);
  public function delete();
  public function save();
  public function load($entity_id);

} // end of ContentEntityInterface
