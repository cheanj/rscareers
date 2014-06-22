<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('job_fieldFK');
			$table->integer('job_fields');
			$table->string('job_title', 100);
			$table->longText('job_description');
			$table->string('job_type', 30);
			$table->integer('job_status')->default(0);	
		    $table->timestamp('job_expires');
		    $table->timestamp('dateDeleted');
		    $table->integer('viewscount');
		    $table->tinyInteger('isActive');
		    $table->integer('applycount');
		    $table->unsignedInteger('created_by');
			$table->timestamps();
		});
	
		Schema::table('jobs', function($table)
		{
			$table->foreign('job_fieldFK')->references('id')->on('jobfields');
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
		Schema::table('jobs', function(Blueprint $table)
		{
			Schema::dropIfExists("jobs");
		});
	}

}
