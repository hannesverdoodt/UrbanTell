<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpfriendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expfriends', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('expedition_id')->unsigned()->default(0);
			$table->foreign('expedition_id')->references('id')->on('expeditions')->onDelete('cascade');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('creator_id')->unsigned()->default(0);
			$table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');	
			$table->integer('state')->default(0);		
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
		Schema::drop('expfriends');
	}

}
