<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Course::create([
            'name'                    => $faker->word,
            'credit_hours'            => $faker->numberBetween(1, 4),
            'general_information'     => $faker->paragraph(),
            'specific_information'    => $faker->paragraph(),
            'accrediting_information' => $faker->paragraph()
			]);
		}
	}

}