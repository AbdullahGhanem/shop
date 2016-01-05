<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Bican\Roles\Models\Role;

class RoleTableSeeder extends Seeder {

    public function run()
    {

		$Owner = Role::create([
		    'name' => 'owner',
		    'slug' => 'owner',
		]);

		$admin = Role::create([
		    'name' => 'admin',
		    'slug' => 'admin',
		]);

		$user = Role::create([
		    'name' => 'user',
		    'slug' => 'user',
		]);
    }

}