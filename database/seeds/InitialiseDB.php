<?php

use Illuminate\Database\Seeder;

class InitialiseDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//Opgelet! Dit verwijdert alle users
	DB::table('users')->delete();
        //Maak een eerste gebruker aan
        DB::table('users')->insert([
		'name' => 'pieter',
		'email' => 'pvankeymeulen@seanachaidh.be',
		'password' => bcrypt('12345')]);
	
    }
}
