<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_meta', function(Blueprint $table)
		{
			//
			$table->increments('umeta');
			$table->integer('user_id');
			$table->text('meta_key');
			$table->text('meta_value');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_meta', function(Blueprint $table)
		{
			Schema::dropIfExists("users_meta");
		});
	}

}
