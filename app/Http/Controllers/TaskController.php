<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;


class TaskController extends Controller
{
    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function index()
    {
    	return view('welcome');
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function show($id)
    {
    	return view('welcome')->with('id',$id);
    }
}
