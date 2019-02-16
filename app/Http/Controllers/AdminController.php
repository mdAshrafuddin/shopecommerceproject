<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){

    	if ($request->isMethod('post')){

    		$data  = $request->input();

    		if (Auth::attemp(['email' => $data['email'], 'password'=>$data['password']])) {

				return redirect('/admin-dashboard');
			}
			else{

    			return redirect('/admin')->with('flash_message_error', 'Invalid Username Or Password');


		}
		}

    	return view('admin.admin_login');

	}

	public function dashbord(){

    	return view('admin.dashboard');
	}
}
