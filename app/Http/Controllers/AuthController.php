<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getSignup(){
        return view('RegAuth.reg');
    }
    public function postSignup(Request $reg){
        $this->validate($reg, [
            'Name' => 'required|alpha_dash|max:255',
            'Email' => 'required|email|max:255',
            'Password' => 'required|min:6|confirmed',
            'Password_confirmation' => 'required|min:6'
        ]);

        User::create([
            'Name' => $reg->input('Name'),
            'Email' => $reg->input('Email'),
            'Password' => bcrypt($reg->input('Password'))
        ]);

        return redirect()->route('home');
    }

    public function getSignin(){
        return view('RegAuth.auth');
    }
    public function postSignin(Request $reg){
        $this->validate($reg, [
            'Email' => 'required|email|max:255',
            'Password' => 'required|min:6'
        ]);

        $user=User::where('Email', $reg->input('Email'))->first();


        if (Hash::check($reg->input('Password'),$user->Password)) {
            Auth::login($user);
            return redirect()->intended('home');
        }
        return redirect()->back()->withErrors('Please check your credentials and try again.');
    }

    public function getSingout(){
        Auth::logout();

        return redirect()->route('home');
    }

}
