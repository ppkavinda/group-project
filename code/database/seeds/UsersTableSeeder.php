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
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'nic' => '123456789V',
            'role' => 1
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'facilitator',
            'email' => 'fac@gmail.com',
            'password' => bcrypt('fac123'),
            'nic' => '121456789V',
            'role' => 2
        ]);
        DB::table('facilitators')->insert([
            'id' => 2
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'entrepreneur',
            'email' => 'ent@gmail.com',
            'password' => bcrypt('ent123'),
            'nic' => '123412341v',
            'role' => 3
        ]);
        DB::table('entrepreneurs')->insert([
            'id' => 3,
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'customer',
            'email' => 'custom@gmail.com',
            'password' => bcrypt('custom123'),
            'nic' => '123412333v',
            'role' => 4
        ]);
        DB::table('customers')->insert([
            'id' => 4,
        ]);

    }
}
