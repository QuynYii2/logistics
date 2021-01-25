<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'shipping staff 1',
            'email' => 'shipping_staff1@gmail.com',
            'password' => Hash::make('Quynguyen@1993'),
            'id_role'   => 4,
            'status'    => 1
        ]);
        DB::table('users')->insert([
            'name' => 'shipping staff 2',
            'email' => 'shipping_staff2@gmail.com',
            'password' => Hash::make('Quynguyen@1993'),
            'id_role'   => 4,
            'status'    => 1
        ]);
    }
}
