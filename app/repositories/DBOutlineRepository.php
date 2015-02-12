<?php namespace repositories;
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2/12/2015
 * Time: 3:50 PM
 */

use Outline;


class DBOutlineRepository {

   /***
    * @return \Illuminate\Database\Eloquent\Collection|static[]
    */
   public function getAll()
   {
      return Outline::All();
   }

   /***
    * @param $id
    * @return \Illuminate\Support\Collection|static
    */
   public function find($id)
   {
      return Outline::findOrFail($id);
   }
} 