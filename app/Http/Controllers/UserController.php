<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    /**
     * access into authentication
     *
     * @return Illuminate\Http\Response
     * @author 
     **/
    public function getLogin()
    {
    	return view('auth.login');
    }

    /**
     * authentication info
     *
     * @return Illuminate\Http\Response
     * @author 
     **/
    public function postLogin(Request $request)
    {
    	$email = $request->input('email');
    	$password = $request->input('password');
    	if (Auth::attempt(['email'=>$email,'password'=>$password])) {
    		return redirect()->intended('/tasks');
    	} else {
    		return redirect()->intended('/login');
    	}
    	
    }

    /**
     * clear authentication info
     *
     * @return Illuminate\Http\Response
     * @author 
     **/
    public function logout()
    {
    	Auth::logout();
    	return redirect()->intended('/');
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function getRegister()
    {
    	return view('auth.register');
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function postRegister()
    {
    }


}
