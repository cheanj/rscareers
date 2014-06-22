<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReligionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('religion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('religion');
			$table->unsignedInteger('created_by');			
			$table->timestamps();
		});



		Schema::table('religion', function($table)
		{
			$table->foreign('created_by')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('religion');
	}

}
