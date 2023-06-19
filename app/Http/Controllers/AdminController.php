<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function adminDash(){
        return view('admin.index');
    }

    public function AdminLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
