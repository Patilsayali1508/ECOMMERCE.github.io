<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Register extends Controller
{
    function register(Request $req)
    {
    	$user = new User;
    	$user->email=$req->email;
    	$user->password=Hash::make($req->password);      
        $user->name=$req->name;
        $user->address=$req->address;
        $user->mobile=$req->mobile;
        $user->save();
        return redirect('/home');

    }

    function login(Request $req)
    {
        $user= User::where(['email' => $req->email])->first();

        if(!$user|| !Hash::check($req->password,$user->password))

        {

        return "Username or password not matched";
        }
        else{

            $req->session()->put('user',$user);

          /*  dd($test);*/

            return redirect('/home');
        }
    }

}
