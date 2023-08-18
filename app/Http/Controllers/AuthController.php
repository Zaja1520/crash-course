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
            //login user after registration
            auth()->login($user);
            return redirect()->route('index')->with('message', 'Register successful');
        }
        }

    }

    public function loginUser(){
        //show login form
        return view('pages.auth.login');
    }

    public function loginProcess(Request $request) {
        //validate form data
        $formFields = $request->validate([
            'email' => ['required','email','max:255'],
            'password' => ['required', 'min:6']
        ]);
        
        //login attempt
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in!');
        }

    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'logged out successfully');
    }
}
