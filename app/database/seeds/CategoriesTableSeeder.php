<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;
use project\entities\Category;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
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