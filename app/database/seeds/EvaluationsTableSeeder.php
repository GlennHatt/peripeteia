<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EvaluationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 11) as $index)
		{
			Evaluation::create([
            'outline_id' => $faker->numberBetween(1, 10),
            'percent'    => $faker->numberBetween(1, 100),
            'name'       => $faker->word()
			]);
		}
	}

}