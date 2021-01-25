<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\User;

class UserController extends Controller
{
    public function index(){
        $list = User::all();
        return view('layouts/system/user/list',['list' => $list]);
    }


    public function userChangeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
