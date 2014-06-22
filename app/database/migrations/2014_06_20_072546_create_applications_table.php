<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('applicant_id');
			$table->unsignedInteger('job_id');
			$table->string('applicantion_status', 45);
			$table->tinyInteger('isdelete');
			$table->timestamps();
		});

		Schema::table('applications', function($table)
		{
			$table->foreign('applicant_id')->references('id')->on('personal_information');
			$table->foreign('job_id')->references('id')->on('jobs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applications');
	}

}
