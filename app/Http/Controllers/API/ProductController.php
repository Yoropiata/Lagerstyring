<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use Illuminate\Http\Response;
use App\Http\Controllers\Controller; 
use App\Product; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class ProductController extends Controller 
{

    public function get(Request $request, $id) {
        $product = Product::find($id);
        return response()->json($product, Response::HTTP_OK);
    }
    public function getall(Request $request) {
        $products = Product::all();
        return response()->json($products, Response::HTTP_OK);
    }
}