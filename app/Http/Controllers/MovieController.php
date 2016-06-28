<?php

namespace Cine\Http\Controllers;

use Illuminate\Http\Request;

use Cine\Http\Requests;

class MovieController extends Controller
{
	public function index()
	{
		return "index";
	}
	public function create()
	{
		return "create";
	}
}
