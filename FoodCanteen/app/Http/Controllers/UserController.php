<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth; 

class UserController extends Controller
{
   
    public function getSignUp()
    {
        return view('user.signup');
    }
	
	public function postSignup(Request $request)

{
	$this->validate($request, [
	 'email' => 'email|required|unique:users',
	 'password' => 'required|min:4'
	 ]);
	 
	 $user = new User([
		'email' => $request->input('email'),
		'password' => bcrypt($request->input('password'))
	 ]);
	 $user->save();
	 
	 Auth::login($user);
	 
	 return redirect()->route('user.profile');
}
	public function getSignin() {
			return view('user.signin');
	}
	
	public function postSignin(Request $request){
	$this->validate($request, [
	 'email' => 'email|required',
	 'password' => 'required|min:4'
	 ]);
	 
	 if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
			return redirect()->route('fooditem.index');
	 }
	 return redirect()->back();
} 
public function getprofile() {
	$order= Auth::user()->orders;
	$order->transform(function($order, $key){
		$order->cart = unserialize($order->cart);
	return $order;
	});
	
	return view('user.profile', ['orders' => $order]);
}
public function getlogout() {
	Auth::logout();
	return redirect()->back();
}
}