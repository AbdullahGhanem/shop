<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    private $tables = [
        'roles',
        'users',
        'profiles',
        'products',
        'categories',
        'category_product',
        'slideshows',
        'reviews'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->clearDatabase();

        Model::unguard();

         $this->call('RoleTableSeeder');
         $this->call('UserTableSeeder');
         $this->call('ProductTableSeeder');
         $this->call('CategoryTableSeeder');
         $this->call('CategoryProductTableSeeder');
         $this->call('SlideshowTableSeeder');
         $this->call('ReviewTableSeeder');
    }

    private function clearDatabase()
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $tableName) {

            DB::table($tableName)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
