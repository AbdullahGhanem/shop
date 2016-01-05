<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{ 

		$faker = Faker::create();

		foreach (range(1,5) as $index) {
			
			$name = $faker->sentence(2);

			$data = [
				'en'  => ['name' => $name],
				'ar'  => ['name' => 'ar'.$name],
			];
			Category::create($data);
		}
	}
}