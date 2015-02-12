<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2/12/2015
 * Time: 4:21 PM
 */

namespace repositories;


interface OutlineRepositoryInterface {
   public function getAll();
   public function find($id);
} 