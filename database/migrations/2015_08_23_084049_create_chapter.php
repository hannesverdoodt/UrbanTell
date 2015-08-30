<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapter extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chapter', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('story_id')->unsigned()->default(0);
			$table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade');     
                        $table->string('title');
                        $table->string('subtitle');
                        $table->string('description');
                        $table->string('type');
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
