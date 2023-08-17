<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function registerUser(){
        return view('pages.auth.registration');
    }

    public function registerProcess(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required','string','min:3'],
            'email' => ['required','string', 'email','max:255', 'unique:users'],
            'password' => ['required','string','min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        else{
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($user) {
            return redirect()->back()->with('message', 'Register successful');
        }
        }

    }
}
