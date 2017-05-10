<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
	    user::create([
			'name' => 'Петя',
            'email' => 'petro@mail.ru',
            'password' => '123123123',
		]);
		
		user::create([
			'name' => 'Вася',
            'email' => 'vasya@mail.ru',
            'password' => '123123123',
		]);
    }
}
