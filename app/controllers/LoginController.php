<?php

	class LoginController extends BaseController{
		
		public function getIndex()
		{
			return View::make('login',array('message'=>''));
		}


		public function postProfile()
		{
			$username=Input::get('username');
			$password=Input::get('password');
			$users=DB::table('user')->where('username',$username)->pluck('password');
			if($users==$password){
				$orders = DB::table('orderin')->get();
			return View::make('admin',array('orders'=>$orders));
			}else{
				return View::make('login',array('message'=>'try again'));
			}
		}
	}
?>