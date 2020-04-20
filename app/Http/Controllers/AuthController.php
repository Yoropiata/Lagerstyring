<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginView(Request $request) {
        $title = "yeeed";
        return view('login', ["title"=>$title]);
    } 
}
