<?php

class UserTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();
		$now = date('Y-m-d H:i:s');
		User::create(array(
			'username' => 'firstuser',
			'password' => Hash::make('first_password'),
			'created_at' => $now,
			'updated_at' => $now
		));
		
	}
}
?>