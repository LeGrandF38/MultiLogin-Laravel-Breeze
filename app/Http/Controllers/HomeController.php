<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index (){
        if (auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype=='user') {
                return view('userDashboard');

            }else if ($usertype=='admin') {
                return view('admin.adminDashboard');
            }else{ 
                return redirect()->back();
            }
        }
    }
}
