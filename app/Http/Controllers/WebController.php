<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function InventoryView(Request $request) {
        $products = Product::all();
        return view('edit-inventory', ["products"=>$products]);
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
