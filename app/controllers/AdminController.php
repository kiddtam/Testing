<?php

class AdminController extends BaseController {


	public function getIndex() 
	{
		$orders = DB::table('orderin')->get();
		return View::make('admin',array('orders'=>$orders));
	}
}


?>