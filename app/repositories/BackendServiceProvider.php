<?php namespace repositories;
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2/12/2015
 * Time: 3:03 PM
 */

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

   public function register()
   {
      $this->app->bind(
         'repositories\DBUserRepositoryInterface',
         'repositories\DBUserRepository'
      );
      $this->app->bind(
         'repositories\DBOutlineRepositoryInterface',
         'repositories\DBOutlineRepository'
      );
      $this->app->bind(
         'repositories\DBCourseRepositoryInterface',
         'repositories\DBCourseRepository'
      );
   }
}