<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');			
			$table->string('firstname', 50);
			$table->string('middlename', 50);
			$table->string('lastname', 50);	
			$table->string('username', 50)->unique();	
			$table->string('password', 65);		
			$table->string('email', 50)->unique();	
			$table->string('remember_token', 100);						
			$table->integer('user_level')->default(0);
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
		Schema::table('users', function(Blueprint $table)
		{
			//
			Schema::dropIfExists("users");
		});
	}


}
