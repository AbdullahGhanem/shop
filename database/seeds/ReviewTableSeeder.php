<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\User;
use App\Review;

class ReviewTableSeeder extends Seeder {

    public function run()
    {

     	$proId  = Product::lists('id')->all();
     	$userId = User::lists('id')->all();

		$faker = Faker::create();

		foreach (range(1,40) as $index) {
			
			Review::create([

				'product_id'  => $faker->randomElement($proId),
				'user_id'     => $faker->randomElement($userId),
				'rating'      => $faker->numberBetween(0,5),
				'review' 	  => $faker->paragraph(6),

				]);
		}

    }

}