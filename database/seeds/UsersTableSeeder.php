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
       $user = new \App\User();
       $user->name="runchana unjai";
       $user->username = "admin";
       $user->email = "pop@hotmail.com";
       $user->password = bcrypt('1234');
       $user->save();
    }
}
