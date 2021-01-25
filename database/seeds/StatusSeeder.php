<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'id_status' => '1',
            'label' => 'Đã nhập kho'
        ]);
        DB::table('status')->insert([
            'id_status' => '2',
            'label' => 'Đang nhập kho'
        ]);
        DB::table('status')->insert([
            'id_status' => '3',
            'label' => 'Chờ giao hàng'
        ]);
        DB::table('status')->insert([
            'id_status' => '4',
            'label' => 'Đang giao hàng'
        ]);
        DB::table('status')->insert([
            'id_status' => '5',
            'label' => 'Đã nhận hàng'
        ]);
        DB::table('status')->insert([
            'id_status' => '0',
            'label' => 'Hủy đơn'
        ]);
    }
}
