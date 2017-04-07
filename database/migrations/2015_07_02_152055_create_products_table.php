<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->decimal('price', 6, 2);
            $table->integer('amount');
            $table->json('informations');    
            $table->boolean('sale');
            $table->boolean('new');
            $table->string('img')->default('new-product.jpg');
            $table->timestamps();
        });

        Schema::create('product_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('title');            
            $table->text('description');
            $table->string('locale')->index();

            $table->unique(['product_id','locale']);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            Schema::drop('product_translationsaa');
            Schema::drop('products');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
