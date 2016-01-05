<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\User;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{ 

		$usersId = User::lists('id')->all();

		$faker = Faker::create();

		foreach (range(1,10) as $index) {
			$title = $faker->sentence(2);
			Product::create([
				'price'  		=> 10.99,
				'amount'  		=> 10,
				'en'      => ['title' => $title],
				'ar'      => ['title' => 'ar'.$title],
			]);
		}
	}

}