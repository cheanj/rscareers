<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_information', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->date('dob');
			$table->string('pob', 255);
			$table->enum('gender', array('Male', 'Female'));
			$table->enum('civil_status', array('Single','Married', 'Separated','Widowed'));
			$table->string('city_address', 100);
			$table->integer('zipcode');
			$table->string('present_contact_no', 20);
			$table->string('provincial_address', 100);
			$table->string('provincial_contact_no', 20);
			$table->string('philhealth_no', 20);
			$table->string('pagibig_no', 20);
			$table->string('sss_no', 20);
			$table->string('tin_no', 20);
			$table->string('health_condition', 45);
			$table->string('height', 20);
			$table->string('weight', 20);
			$table->string('any_physical_deformities', 45);
			$table->integer('no_of_children');
			$table->string('children_names_and_birth', 255);
			$table->unsignedInteger('citizenship_idFK');
			$table->unsignedInteger('religion_idFK');
			$table->string('name_of_spouse', 50);
			$table->string('spouse_company', 50);
			$table->string('spouse_company_address', 60);
			$table->string('person_notify_emergency', 45);
			$table->string('person_notify_relationship', 45);
			$table->string('person_notify_address', 65);
			$table->string('person_notify_contact', 10);
			$table->string('cv', 50);
			$table->enum('willing_to_travel', array('Yes', 'No'));
			$table->string('province_relocate', 45);
			$table->date('startDate');
			$table->tinyInteger('isActive');
			$table->timestamps();
		});


		Schema::table('personal_information', function($table)
		{
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('citizenship_idFK')->references('id')->on('citizenship');
			$table->foreign('religion_idFK')->references('id')->on('religion');
			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personal_information');
	}

}
