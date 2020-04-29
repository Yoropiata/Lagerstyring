<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use Illuminate\Http\Response;
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class UserController extends Controller 
{
    public function getall(Request $request) {
        $users = User::all();
        return response()->json($users, Response::HTTP_OK);
    }
}