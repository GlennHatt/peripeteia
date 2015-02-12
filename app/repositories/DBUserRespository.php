<?php namespace repositories;
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2/12/2015
 * Time: 2:16 PM
 */

use Order;

class DBUserRepository implements UserRepositoryInterface{

   /***
    * @return mixed
    */
   public function getAll()
   {
      return User::All();
   }

   /***
    * @param $id
    * @return mixed
    */
   public function find($id)
   {
      return User::findOrFail($id);
   }
}