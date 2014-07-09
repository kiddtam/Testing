<?php
	
	class RegisterController extends BaseController{

		public function getIndex()
		{
			return View::make('register');
		}

		public function postIndex()
		{
			$username=Input::get('username');
			$password=Input::get('password');
			$email=Input::get('email');
			//DB::insert('insert into user(username, password, email) values(username,password,email');
			User::insert(array(
									'username'=>$username,
									'password'=>Hash::make($password),
									'email'=>$email
									));
			return View::make('home',array('message'=>'Registered!'));
		}
	}

?>