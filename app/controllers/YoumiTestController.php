<?php

	class YoumiTestController extends BaseController {

		public function getIndex() 
		{
			$secret='1234567890';
			$str='';
			$params = Input::all();
			$sub_params=array_slice($params, 0,-1);
			ksort($sub_params);
			foreach ($sub_params as $key => $value) {
				$str.="{$key}={$value}";
			}
			$str.=$secret;
			echo $str.'<br>';
			echo md5($str).'<br>';
			echo $params['sign'].'<br>';
			if (md5($str) == $params['sign']) {
				DB::table('orderin')->insert(
					array('order_id'=>$params['order'], 'app_id'=>$params['app'], 'ad_name'=>$params['ad'], 
						'ad_id'=>$params['adid'], 'user_id'=>hexdec($params['user']), 'chn'=>$params['chn'], 
						'points'=>$params['points'], 'price'=>$params['price'], 'time'=>$params['time'], 
						'dev_id'=>$params['device'], 'sig'=>$params['sig'], 'sign'=>$params['sign'])
				
					);
				$points = DB::table('clients')->where('id',hexdec($params['user']))->pluck('points');
				$balance = DB::table('clients')->where('id',hexdec($params['user']))->pluck('balance');
				var_dump(intval($points));
				var_dump(intval($params['points']));
				$point=intval($params['points'])+intval($points);
				$balan=intval($params['points'])/100+$balance;
				var_dump($point);
				Clients::where('id', hexdec($params['user']))
		            ->update(array('points' => $point));
		      	Clients::where('id', hexdec($params['user']))
		            ->update(array('balance' => $balan));
			} else  {
				return 'illeage!';
			}

			return $params;
		}
	}

?>