<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizenshipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citizenship', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('citizenship', 45);
			$table->unsignedInteger('created_by');
			$table->timestamps();
		});


		Schema::table('citizenship', function($table)
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
		Schema::drop('citizenship');
	}

}
