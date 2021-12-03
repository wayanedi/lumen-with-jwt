<?php

namespace Database\Seeders;
use DB;
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
        DB::table('users')->insert([
            'name' => 'wayan',
            'email' => 'wayan@gmail.com',
            'password' => app('hash')->make('wayan'),
            ]);
    }
}