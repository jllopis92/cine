<?php

namespace Cine\Http\Controllers;

use Illuminate\Http\Request;

use Cine\Http\Requests;

class FrontController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function login(){
        return view('login');
    }
    public function upload(){
		return view('upload');
    }
    public function cine_tv(){
    	return view('cine_tv');
    }
    public function control_panel(){
    	return view('control_panel');
    }
    public function admin(){
        return view('admin.index');
   }
}
