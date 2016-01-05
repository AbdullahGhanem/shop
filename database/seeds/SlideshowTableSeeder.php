<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Slideshow;

class SlideshowTableSeeder extends Seeder {

    public function run()
    {

		$faker = Faker::create();

		foreach (range(1,4) as $index) {
			
			Slideshow::create([

				'title' => $faker->sentence(2),
				'description' => $faker->paragraph(4),
				'photo' => 'http://www.jssor.com/template/img/1920/blue.jpg'

				]);
		}

    }

}