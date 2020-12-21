<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\RegRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegController extends Controller {
    public function submit(RegRequest $reg){
        $contact = new User();
        $contact->Name = $reg->input('Name');
        $contact->Email = $reg->input('Email');
        $contact->Password = $reg->input('Password');

        $contact->save();

        return redirect()->home();
    }

    public function create(){
        return redirect()->home();
    }

    public function create1(){
        return view('home');
    }

    public function submit1(Request $reg){
        //$credentials = $reg->only('Email', 'Password');

        if(Auth::attempt($reg->only('Email', 'Password'))){
            return redirect(route('home'));
        }
        return redirect()->back()->withErrors('Please check your credentials and try again.');
    }

    public function destroy(){
        auth()->logout();

        return redirect()->home();
    }
}
