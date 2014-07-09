<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::Controller('/admin', 'AdminController');
Route::Controller('youmi_test', 'YoumiTestController');
Route::Controller('points_test', 'PointsController');
Route::controller('/login', 'LoginController');



Route::get('/', function(){
	return View::make('home', array('message'=>''));
});
Route::get('transactions', function(){
	$trans = DB::table('transactions')->get();
	return View::make('transactions',array('trans'=>$trans));
});

Route::get('type', function(){
	$type = DB::table('type') -> get();
	return json_encode($type);
});



Route::get('/register',function()
{
	return View::make('register');
});


Route::get('/users',function()
{
	$users = DB::table('clients')->get();
	return View::make('users', array('users'=>$users));
});

// Route::post('/modify',function()
// {
// 	$username=Input::get('username');
// 	$password=Input::get('password');
// 	$email=Input::get('email');
// 	DB::table('user')
//             ->where('username', $username)
//             ->update(array('password' => $password, 'email'=>$email));
//             	return Redirect::to('admin');
// });

// Route::post('/register',function()
// {
// 	$username=Input::get('username');
// 	$password=Input::get('password');
// 	$email=Input::get('email');
// 	//DB::insert('insert into user(username, password, email) values(username,password,email');
// 	User::insert(array(
// 							'username'=>$username,
// 							'password'=>Hash::make($password),
// 							'email'=>$email
// 							));
// 	return View::make('home',array('message'=>'Registered!'));


// });
// Route::get('/login',function()
// {
// 	return View::make('login',array('message'=>''));
// });

// Route::post('/login',function()
// {
// 	$username=Input::get('username');
// 	$password=Input::get('password');
// 	$users=DB::table('user')->where('username',$username)->pluck('password');
// 	if($users==$password){
// 		$orders = DB::table('orderin')->get();
// 	return View::make('admin',array('orders'=>$orders));
// 	}else{
// 		return View::make('login',array('message'=>'try again'));
// 	}
	

// });

// Route::get('/admin',function(){
// 	$orders = DB::table('orderin')->get();
// 	return View::make('admin',array('orders'=>$orders));
// });




// Route::get('youmi_test', function()
// { 	
// 	$secret='1234567890';
// 	$str='';
// 	$params = Input::all();
// 	$sub_params=array_slice($params, 0,-1);
// 	ksort($sub_params);
// 	foreach ($sub_params as $key => $value) {
// 		$str.="{$key}={$value}";
// 	}
// 	$str.=$secret;
// 	echo $str.'<br>';
// 	echo md5($str).'<br>';
// 	echo $params['sign'].'<br>';
// 	if (md5($str) == $params['sign']) {
// 		DB::table('orderin')->insert(
// 			array('order_id'=>$params['order'], 'app_id'=>$params['app'], 'ad_name'=>$params['ad'], 
// 				'ad_id'=>$params['adid'], 'user_id'=>hexdec($params['user']), 'chn'=>$params['chn'], 
// 				'points'=>$params['points'], 'price'=>$params['price'], 'time'=>$params['time'], 
// 				'dev_id'=>$params['device'], 'sig'=>$params['sig'], 'sign'=>$params['sign'])
		
// 			);
// 		$points = DB::table('clients')->where('id',hexdec($params['user']))->pluck('points');
// 		$balance = DB::table('clients')->where('id',hexdec($params['user']))->pluck('balance');
// 		var_dump(intval($points));
// 		var_dump(intval($params['points']));
// 		$point=intval($params['points'])+intval($points);
// 		$balan=intval($params['points'])/100+$balance;
// 		var_dump($point);
// 		Clients::where('id', hexdec($params['user']))
//             ->update(array('points' => $point));
//       	Clients::where('id', hexdec($params['user']))
//             ->update(array('balance' => $balan));
// 	} else  {
// 		return 'illeage!';
// 	}

// 	return $params;

	
// });

	// Route::post('points_test', function(){
	// 	//localhost:8000/points_test?user=3826&counts=2.00&type=1
	// 	$params = Input::all();
	// 	$user = Clients::find(intval($params['user']));
	// 	if ($user->balance >= floatval($params['counts'])) {
	// 		DB::transaction(function() use ($params, $user)
	// 		{
	// 			$user->balance -= $params['counts'];
	// 			$user->save();
	// 			$transactions = new Transactions;
	// 			$transactions->user_id = intval($params['user']);
	// 			$transactions->points_out = $params['counts'];
	// 			$transactions->type = $params['type'];
	// 			$transactions->save();
	// 		});
	// 		var_dump($params);

	// 		var_dump($user);
			
	// 	} else {
	// 		return 'exchange failed';
	// 	}

	// });

	




?>