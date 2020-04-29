<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use Illuminate\Http\Response;
use App\Http\Controllers\Controller; 
use App\Department; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class DepartmentController extends Controller 
{
    public function getall(Request $request) {
        $departments = Department::all();
        return response()->json($departments, Response::HTTP_OK);
    }
}