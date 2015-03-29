<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function($table) {
                    $table->engine = 'InnoDB';
                    $table->increments('id');
                    $table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
                    $table->integer('category_id')->unsigned();
                    $table->foreign('category_id')->references('id')->on('categories');
                    $table->string('image');
                    $table->text('description');
                    $table->timestamps();
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('images');
	}

}
