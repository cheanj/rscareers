<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApplicantEducationalBackground extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicant_educational_background', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('applicant_id');
			$table->string('school_name');
			$table->unsignedInteger('degree_id');
			$table->string('location', 65);
			$table->smallInteger('year_attended');
			$table->string('extra_curricular', 45);
			$table->string('achievements', 45);
			$table->timestamps();
		});


		Schema::table('applicant_educational_background', function($table)
		{
			$table->foreign('applicant_id')->references('id')->on('personal_information');
			$table->foreign('degree_id')->references('id')->on('degree_list');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('applicant_educational_background', function(Blueprint $table)
		{
			//
			Schema::dropIfExists("applicant_educational_background");
		});
	}

}
