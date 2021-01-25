<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App\User;
use App\Warehouses;

class WarehouseController extends Controller
{
    public function index(){
        $list = Warehouses::all();
        return view('layouts/system/warehouse/list',['list' => $list]);
    }

    public function add(){
        $manager_warehouse = User::where('id_role', '=', 2)->get();
        $staff_warehouse = User::where('id_role', '=', 3)->get();
        return view('layouts/system/warehouse/add', [
            'manager_warehouse' => $manager_warehouse,
            'staff_warehouse'   => $staff_warehouse
        ]);
    }

    public function checkadd(Request $request){

        $warehouses          = new Warehouses;
        $warehouses->name    = $request->input('name_warehouse');
        $warehouses->name_manager   = $request->input('name_manager');
        $warehouses->name_staff = $request->input('name_staff');
        try {
            $warehouses->save();
            return redirect('/warehouse/list')->with('success', 'Thêm kho hàng thành công');
        }
        catch (\Exception $e) {
            return redirect('/warehouse/addwarehouse')->with('notsuccess', 'Thêm kho hàng không thành công');
        }
    }

    public function edit($id){

        $detail = Warehouses::where('id', '=', $id)->get();
        $manager_warehouse = User::where('id_role', '=', 2)->get();
        $staff_warehouse = User::where('id_role', '=', 3)->get();
        return view('layouts/system/warehouse/edit', [
            'detail' => $detail,
            'manager_warehouse' => $manager_warehouse,
            'staff_warehouse'   => $staff_warehouse
        ]);
    }

    public function update(Request $request){
        $id = $request->input('id');
        $warehouse = Warehouses::find($id);
        try {
            $warehouse->update(Input::all());
            return redirect('/warehouse/list')->with('success', 'Cập nhật thành công');
        }
        catch (\Exception $e) {
            return redirect('/warehouse/'.$id.'/edit')->with('notsuccess', 'Cập nhật không thành công');
        }
    }

    public function destroy(Request $request, $id){
        $warehouse = Warehouses::find($id);
        $warehouse->delete();

        return redirect('/warehouse/list')->with('success', 'Xóa bản ghi thành công');
    }

}
