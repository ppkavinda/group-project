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
        DB::table('users')->insert([
            'id' => 1,
            // 'fname' => 'admin',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'nic' => '123456789V',
            // 'tpNo' => '1234123443',
            // 'profilePic' => 'img',
            'role' => 1
        ]);

        DB::table('customers')->insert([
            'id' => 1
        ]);
      
        DB::table('users')->insert([
            'id' => 4,
            // 'fname' => 'admin',
            'name' => 'sachintha',
            'email' => 'sachin133hm@gmail.com',
            'password' => bcrypt('123456'),
            'nic' => '121456789V',
            // 'tpNo' => '1234123443',
            // 'profilePic' => 'img',
            'role' => 1
        ]);
        DB::table('customers')->insert([
            'id' => 4
        ]);


    }
}
