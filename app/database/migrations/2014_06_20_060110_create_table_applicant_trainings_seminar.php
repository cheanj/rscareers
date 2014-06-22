<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApplicantTrainingsSeminar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicant_trainings_seminar', function(Blueprint $table)
		{			
			$table->increments('id');
			$table->unsignedInteger('applicant_id');
			$table->string('title', 100);
			$table->string('venue', 65);
			$table->string('date_from', 45);
			$table->string('date_to', 45);
			$table->date('year_attended');
			$table->timestamps();
		});
		
		
		Schema::table('applicant_trainings_seminar', function($table) 
		{
			$table->foreign('applicant_id')->references('id')->on('personal_information');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applicnt_trainings_seminar');
	}

}
