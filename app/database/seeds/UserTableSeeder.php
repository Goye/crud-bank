<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'id'       => 12,
			'name'     => 'Carlos Goyeneche',
			'username' => 'Goyesays',
			'email'    => 'karlos.goye@gmail.com',
			'password' => Hash::make('Alpine12'),
		));
	}

}