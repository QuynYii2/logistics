<?php

use Illuminate\Database\Seeder;

class WearehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouse')->insert([
            'name' => 'Kho Mỹ Đình',
            'name_manager' => 'Quản lý kho 1',
            'name_staff' => 'Nhân viên Kho 1',
            'id_role'   =>1
        ]);
        DB::table('warehouse')->insert([
            'name' => 'Kho Cầu G',
            'name_manager' => 'Quản lý kho 1',
            'name_staff' => 'Nhân viên Kho 1',
            'id_role'   =>1
        ]);
    }
}
