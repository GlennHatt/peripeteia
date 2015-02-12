<?php namespace repositories;
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2/12/2015
 * Time: 4:17 PM
 */

use course;

class DBCourseRepository {

   /***
    * @return \Illuminate\Database\Eloquent\Collection|static[]
    */
   public function getAll()
   {
      return Course::All();
   }

   /***
    * @param $id
    * @return \Illuminate\Support\Collection|static
    */
   public function find($id)
   {
      return Course::findOrFail($id);
   }
} 