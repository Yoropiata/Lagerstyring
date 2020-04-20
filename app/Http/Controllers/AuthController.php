<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use App\User; 
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function loginView(Request $request) {
        $title = "Login";
        return view('login', ["title"=>$title]);
    }

    public function login(Request $req)
    {
        //request('checkbox') //remember me
        
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {         
            return redirect('/inventar'); 
        } else {
            return redirect('/login');
        }
    }
}
