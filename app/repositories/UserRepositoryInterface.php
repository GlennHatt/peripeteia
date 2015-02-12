<?php namespace repositories;
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2/12/2015
 * Time: 2:31 PM
 */

interface UserRepositoryInterface {
   public function getAll();
   public function find($id);
}