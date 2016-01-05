<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;
use App\Category;

class CategoryProductTableSeeder extends Seeder {

    public function run()
    {

     	$proId  = Product::lists('id')->all();
     	$cateId = Category::lists('id')->all();

		$faker = Faker::create();

		foreach ($proId as $index) {
			
			DB::table('category_product')->insert([

				'product_id' => $index,
				'category_id' => $faker->randomElement($cateId)

				]);
		}

    }

}