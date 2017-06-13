<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;
use Illuminate\Contracts\Validation\Validator;

session_start();

class BasicController extends Controller
{
	public function terms() {
		return view('frontend.terms');
	}
	
	public function privacy() {
		return view('frontend.privacy');
	}
	
	public function cookie_policy() {
		return view('frontend.cookie_policy');
	}
	
		
}