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
            'fname' => 'admin',
            'lname' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'tpNo' => '1234123443',
            'profilePic' => 'img',
            'role' => 1
        ]);

        DB::table('customers')->insert([
            'id' => 1
        ]);
    }
}
