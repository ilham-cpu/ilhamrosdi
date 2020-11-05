<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'name' => Str::random(10).'Ilham',
            'email' => Str::random(10).'admin@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        //
    }
}
