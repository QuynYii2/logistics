<?php

namespace App\Http\Controllers;

use App\Warehouses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Session;
use App\User;
use App\Bill;

class BillController extends Controller
{
    public function index(){
        $list = Bill::all();
        $permission = Auth::user()->id_role;
        $list_user = Auth::user()->all();
        $list_warehouses = Warehouses::all();
        $status_array = array('Đang nhập kho' => 1, 'Đã nhập kho' => 2, 'Chờ giao hàng' => 3, 'Đang giao hàng' => 4, 'Đã nhận hàng' => 5, 'Hủy đơn' =>0);
        return view('layouts/system/bill/list',[
            'list' => $list,
            'permission'  => $permission,
            'status_array'  => $status_array,
            'list_warehouses'  => $list_warehouses,
            'list_user' => $list_user
        ]);
    }

    public function add(){
        $staff_warehouse = User::where('id_role', '=', 3)->get();
        $staff_shipping = User::where('id_role', '=', 4)->get();
        $delivery = Warehouses::all();
        $list_warehouses = Warehouses::all();
        return view('layouts/system/bill/add', [
            'staff_warehouse' => $staff_warehouse,
            'staff_shipping'   => $staff_shipping,
            'delivery' => $delivery,
            'list_warehouses'  => $list_warehouses
        ]);
    }

    public function checkadd(Request $request){

        $bill          = new Bill;
        $bill ->name    = $request->input('name_bill');
        $bill ->delivery   = (int)$request->input('Delivery');
        $bill ->through = (int)$request->input('through');
        $bill ->last_point = (int)$request->input('Last_point');
        $bill ->shipping_staff = (int)$request->input('Shipping_staff');
        $bill ->status_bill = (int)$request->input('bill_staff');
        $bill ->ware_staff = (int)$request->input('Warehouse_staff');
        try {
            $bill->save();
            return redirect('/bill/list')->with('success', 'Thêm Bill  thành công');
        }
        catch (\Exception $e) {
            return redirect('/bill/addbill')->with('notsuccess', 'Thêm Bill  không thành công');
        }
    }



    public function updatestatus(Request $request){
        $bill = Bill::find($request->id);
        $bill->status_bill = (int)$request->status_bill;
        $bill->save();

    }

    public function edit($id){

        $detail = Bill::where('id', '=', $id)->get();
        $staff_warehouse = User::where('id_role', '=', 3)->get();
        $staff_shipping = User::where('id_role', '=', 4)->get();
        $delivery = Warehouses::all();
        $list_warehouses = Warehouses::all();
        return view('layouts/system/bill/edit', [
            'detail' => $detail,
            'delivery' => $delivery,
            'staff_warehouse'   => $staff_warehouse,
            'staff_shipping'   => $staff_shipping,
            'list_warehouses'  => $list_warehouses
        ]);
    }

    public function update(Request $request){
        $id = $request->input('id');
        $bill = Bill::find($id);
        try {
            $bill->update(Input::all());
            return redirect('/bill/list')->with('success', 'Cập nhật thành công');
        }
        catch (\Exception $e) {
            return redirect('/bill/'.$id.'/edit')->with('notsuccess', 'Cập nhật không thành công');
        }
    }


    public function statics(Request $request){
        $list = Bill::all();
        $user = User::all();
        $warehouse = Warehouses::all();
        $status_array = array('Đang nhập kho' => 1, 'Đã nhập kho' => 2, 'Chờ giao hàng' => 3, 'Đang giao hàng' => 4, 'Đã nhận hàng' => 5, 'Hủy đơn' =>0);
        return view('layouts/system/bill/statics',['list' => $list, 'warehouse' => $warehouse,'user' => $user, 'status_array'  => $status_array]);
    }

    public function Gstatics(Request $request) {

//        $matchThese = ['status_bill' => $request->status_bill, 'ware_staff' => $request->ware_staff, 'delivery' => $request->warehouse];
        $matchThese = [];
        if ($request->status_bill != ''){
            $matchThese['status_bill'] = $request->status_bill;
        }
        if ($request->ware_staff != ''){
            $matchThese['ware_staff'] = $request->ware_staff;
        }
        if ($request->warehouse != ''){
            $matchThese['delivery'] = $request->warehouse;
        }
        $list = Bill::where($matchThese)->get();
        $user = User::all();
        $warehouse = Warehouses::all();
        $status_array = array('Đang nhập kho' => 1, 'Đã nhập kho' => 2, 'Chờ giao hàng' => 3, 'Đang giao hàng' => 4, 'Đã nhận hàng' => 5, 'Hủy đơn' =>0);
        $view = view("layouts/system/bill/returnstatics",compact('list', 'user', 'warehouse','status_array'))->render();
        return response()->json(['html'=>$view]);

    }


    public function destroy(Request $request, $id){
        $bill = Bill::find($id);
        $bill->delete();
        return redirect('/bill/list')->with('success', 'Xóa bản ghi thành công');
    }
}
