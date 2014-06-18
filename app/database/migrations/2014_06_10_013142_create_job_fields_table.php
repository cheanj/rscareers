<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_fields', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('job_fields', 255);
			$table->integer('added_by');
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
		Schema::table('job_fields', function(Blueprint $table)
		{
			Schema::dropIfExists('job_fields');
		});
	}

}
