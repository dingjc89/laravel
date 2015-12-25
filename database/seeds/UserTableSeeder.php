<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array('name'=>'admin','email'=>'dingjc89@126.com','password'=>Hash::make('admin')));
    }
}
