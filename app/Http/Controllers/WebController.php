<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
        $title = "Inventar rettelses side!";
        return view('edit-inventory', ["title"=>$title]);
    } 

    public function AdminView(Request $request) {
        $title = "Adminisistrator side!";
        return view('admin', ["title"=>$title]);
    }
}
