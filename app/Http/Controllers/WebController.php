<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WebController extends Controller
{
    public function InventoryView(Request $request) {
        $title = "Inventar side!";
        return view('overview', ["title"=>$title]);
    } 
    
    public function InventoryEditView(Request $request) {
        $products = Product::all();
        return view('edit-inventory', ["products"=>$products]);
    } 

    public function AdminView(Request $request) {
        $title = "Adminisistrator side!";
        return view('admin', ["title"=>$title]);
    }
}
