<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UserController extends Controller
{
    /** 
     * Create User 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), 
        [ 
            'name' => 'required', 
            'email' => 'required|email|unique:users,email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);

        $input = $request->all(); 

        if ($validator->fails()) { 
            if ($input['password'] != $input['c_password']) {
                return redirect('/brugere')->with('error', 'Adgangskoden matcher ikke.'); 
            }
            return redirect('/brugere')->with('error', 'Brugeren eksisterer');          
        }

        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        return redirect('/brugere');
    }

    /** 
     * Edit User
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function edit(Request $request) 
    { 
        $validator = Validator::make($request->all(), 
        [ 
            'id' => 'required', 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => '', 
            'c_password' => 'same:password', 
        ]);

        $input = $request->all(); 

        if ($validator->fails()) { 
            if ($input['password'] != $input['c_password']) {
                return redirect('/bruger/ret')->with('error', 'Adgangskoden matcher ikke.'); 
            }
            return redirect('/bruger/ret')->with('error', 'Brugeren eksisterer');          
        }

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->email = $input['email'];
        if (!empty($input['password'])) {
            $user->password = bcrypt($input['password']);
        }
        $user->save();
        return redirect('/brugere');
    }

    /** 
     * Delete User 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function delete(Request $request) 
    { 
        $user = User::find(request('id'));
        $user->delete();
        return redirect('/brugere');
    } 
}
