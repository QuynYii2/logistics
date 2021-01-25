<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $roles = Auth::user()->id_role;
//        //dd($roles);
//        if ($roles !=5) {
//            return view('layouts/system/dashboard');
//        }
//        else {
//            return view('layouts/customer/index');
//        }
        return view('layouts/system/dashboard');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
