<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'admin1',
            'email'=> 'admin1@mail.com',
            'password'=>bcrypt('admin123'),
            'role'=>'admin'
        ]);
        DB::table('users')->insert([
            'name'=>'user1',
            'email'=> 'user1@mail.com',
            'password'=>bcrypt('user123'),
        ]);
    }
}
