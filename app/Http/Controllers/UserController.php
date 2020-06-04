<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	
	public function gethome(){
		$this->middleware('auth');
		return view('home');
	}
	public function userSignUp(Request $request){
		$this->validate($request,[
			'email'=> 'Required|email|unique:users',
			'username' => 'required|max:120',
			'password' => 'required|min:8'


		]);
		$email=$request['email'];
		$username=$request['username'];
		$password=bcrypt($request['password']) ;

		$user=new User();
		$user->email=$email;
		$user->username=$username;
		$user->password=$password;

		$user->save();
		Auth::login($user);
		return redirect()->route('home');
	}

	public function userSignIn(Request $request){
		  $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

		if(Auth::attempt(['email'=> $request['email'],'password'=>$request['password']])){
			return redirect()->route('home');
			
		}
		else{
			return redirect()->back();
		}
	}

	public function getLogout(){
		Auth::Logout();
		return redirect()->route('welcome');
	}
	public function getmainpage(){
		return view('welcome');	
	}
	public function getprofile(){

		return view('profile');
	}
 
}
?>