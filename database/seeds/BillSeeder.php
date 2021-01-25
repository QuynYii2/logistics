<?php

use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill')->insert([
            'name' => 'Bill 1',
            'delivery' => 'Kho My Dinh',
            'through' => 'kho cau giay',
            'last_point'   => 'kho cau dien',
            'shipping_staff'    => 'shipping 1',
            'status_bill'       => 'Dang nhap kho'
        ]);
        DB::table('bill')->insert([
            'name' => 'Bill 1',
            'delivery' => 'Kho cau giay',
            'through' => '',
            'last_point'   => 'khach hang',
            'shipping_staff'    => 'shipping 2',
            'status_bill'       => 'Dang giao hang'
        ]);
    }
}
