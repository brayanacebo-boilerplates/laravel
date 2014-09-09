<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Category::create([

		// 	]);
		// }

		Category::create([
			'id' => 1,
			'name' => 'Backend',
			'slug' => 'backend'
		]);


		Category::create([
			'id' => 2,
			'name' => 'Frontend',
			'slug' => 'frontend'
		]);

		Category::create([
			'id' => 3,
			'name' => 'Designers',
			'slug' => 'designers'
		]);

	}

}