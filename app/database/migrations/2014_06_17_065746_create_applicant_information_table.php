<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicant_information', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');			
			$table->date('dob');
			$table->string('pob', 255);
			$table->string('gender', 10);
			$table->string('civil_status', 10);
			$table->string('city_address', 100);
			$table->integer('zip_code');
			$table->string('present_contact_no', 20);
			$table->string('provincial_address', 100);
			$table->string('provincial_contact_no', 45);
			$table->integer('philhealth_no');
			$table->integer('sss_no');
			$table->string('health_condition', 45);
			$table->integer('height');
			$table->integer('weigth');
			$table->string('any_physical_deformities', 100);
			$table->integer('no_of_children');
			$table->string('citizenship', 10);
			$table->string('religion', 45);
			$table->string('name_of_spouse', 65);
			$table->string('spouse_company', 65);
			$table->string('spouse_company_address', 100);
			$table->string('person_notify_emergency', 45);
			$table->string('person_notify_contact', 50);			
			$table->timestamps();
			
		});

		Schema::create('applicant_information', function($table)
		{
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('applicant_information', function(Blueprint $table)
		{
			Schema::dropIfExists("applicant_information");
		});
	}

}
