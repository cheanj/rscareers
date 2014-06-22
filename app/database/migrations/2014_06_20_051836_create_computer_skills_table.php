<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('computer_skills', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('skill_name', 40);
			$table->unsignedInteger('created_by');
			$table->tinyInteger('isdelete');
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
		Schema::drop('computer_skills');
	}

}
