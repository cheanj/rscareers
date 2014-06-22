<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApplicantFamilyBackground extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicant_family_background', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('applicant_id');
			$table->string('fullname', 45);
			$table->string('company', 45);
			$table->string('position', 30);
			$table->integer('age');
			$table->string('contact_no', 20);
			$table->string('relationship', 20);
			$table->timestamps();
		});


		Schema::table('applicant_family_background', function($table)
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
		Schema::drop('applicant_family_background');
	}

}
