<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SessionAuth extends Controller
{
    function SessionLogin(Request $req)
	
    {
    	/*$data=$req->input();
    
    	$req->session()->put('user',$data['email']);
		echo session('user');
		
		return redirect('/home');*/
    	


		$user= User::where(['email' => $req->email])->first();

        if(!$user|| !Hash::check($req->password,$user->password))

        {

        return "Username or password not matched";
        }
        else{

            $req->session()->put('user',$user['email']);

          /*dd($user);*/

            return redirect('/home');
        }
    }
}
