<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description'   => 'Quản lý hệ thống'
        ]);
        DB::table('roles')->insert([
            'name' => 'Manager Warehouse',
            'description'   => 'Quản lý kho'
        ]);
        DB::table('roles')->insert([
            'name' => 'Staff Warehouse',
            'description'   => 'Nhân viên kho'
        ]);
        DB::table('roles')->insert([
            'name' => 'Shipping Staff',
            'description'   => 'Nhân viên vận chuyển'
        ]);
        DB::table('roles')->insert([
            'name' => 'Customer',
            'description'   => 'Khách hàng'
        ]);
    }
}
