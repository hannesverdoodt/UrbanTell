<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterpictures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chapterpictures', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('chapter_id')->unsigned()->default(0);
			$table->foreign('chapter_id')->references('id')->on('chapter')->onDelete('cascade');     
                        $table->string('image');
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
		//
	}

}
