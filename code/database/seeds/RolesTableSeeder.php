<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'role' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'role' => 'Facilitator'
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'role' => 'Enterpreneur'
        ]);
        DB::table('roles')->insert([
            'id' => 4,
            'role' => 'Customer'
        ]);
    }
}
