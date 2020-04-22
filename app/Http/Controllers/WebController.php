<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class WebController extends Controller
{
    public function loginView(Request $request) {
        if(Auth::check()) {
            redirect("inventar");
        } else {
            return view('login');
        }
    }
    public function InventoryView(Request $request) {
        $products = Product::all();
        return view('overview', ["products"=>$products]);
    } 
    
    public function InventoryEditView(Request $request) {
        $products = Product::all();
        return view('edit-inventory', ["products"=>$products]);
    }

    public function UsersView(Request $request) {
        $title = "Brugere";
        $users = User::all();
        return view('users', ["title"=>$title, "users"=>$users]);
    }

    public function UsersEditView(Request $request) {
        $title = "Ret Bruger";
        $user = User::find(request('id'));
        return view('edit-user', ["title"=>$title, "user"=>$user]);
    }
}
