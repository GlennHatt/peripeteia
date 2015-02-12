<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2/12/2015
 * Time: 4:22 PM
 */

namespace repositories;


interface CourseRepositoryInterface {
   public function getAll();
   public function find($id);
} 