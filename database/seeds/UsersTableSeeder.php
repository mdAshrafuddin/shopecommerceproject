<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	\App\User::create([

    		'email' => "MdTanjil@gmail.com",
    		'name' => "MD AShraf",
			'password' => bcrypt('password')

		]);

    }
}
