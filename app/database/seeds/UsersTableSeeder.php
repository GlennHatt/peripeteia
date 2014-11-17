<?php
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder {
   public function run()
   {
      $faker = Faker::create();
      foreach(range(1, 10) as $index)
      {
         User::create([
            'first_name'            => $first_name = $faker->firstName,
            'last_name'             => $last_name  = $faker->lastName,
            'email'                 => $first_name . $last_name . '@' . $faker->freeEmailDomain,
            'password'              => $password = $faker->word,
            'password_confirmation' => $password,
            'office'                => $faker->bothify('??###'),
            'office_hours'          => $faker->regexify('(VII|VI|V|IV|III|II|I) (M,W,F|T,R), (VII|VI|V|IV|III|II|I) (M,W,F|T,R)')
         ]);
      }
   }
}