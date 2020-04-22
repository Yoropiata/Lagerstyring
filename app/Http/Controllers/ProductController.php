<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function create(Request $request) {
        $name = request("name");
        $amount = request("amount");
        Product::create([
            "name" => $name,
            "count" => $amount,
            "department_id" => 1,
        ]);
        return redirect("/inventar/ret");
    }
    public function update(Request $request) {
        $id = request("id");
        $name = request("name");
        $amount = request("amount");

        $product = Product::find($id);
        
        $product->name = $name;
        $product->count = $amount;
        $product->save();

        return redirect("/inventar/ret");
    }
    public function delete(Request $request, $id) {
        Product::destroy($id);
        return back();
    }
}
