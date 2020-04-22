<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class WebController extends Controller
{
    public function InventoryView(Request $request) {
        $products = Product::all();
        return view('overview', ["products"=>$products]);
    } 
    
    public function InventoryEditView(Request $request) {
        $title = "Inventar rettelses side!";
        return view('edit-inventory', ["title"=>$title]);
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
