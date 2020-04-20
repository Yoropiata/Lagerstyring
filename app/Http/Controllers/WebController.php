<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function InventoryView(Request $request) {
        $title = "Inventar side!";
        return view('overview', ["title"=>$title]);
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
