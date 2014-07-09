<?php
	
	class PointsController extends BaseController {

		public function getIndex()
		{
			//localhost:8000/points_test?user=3826&counts=2.00&type=1
			$params = Input::all();
			$user = Clients::find(intval($params['user']));
			if ($user->balance >= floatval($params['counts'])) {
				DB::transaction(function() use ($params, $user)
				{
					$user->balance -= $params['counts'];
					$user->save();
					$transactions = new Transactions;
					$transactions->user_id = intval($params['user']);
					$transactions->points_out = $params['counts'];
					$transactions->type = $params['type'];
					$transactions->save();
				});
				var_dump($params);

				var_dump($user);
				
			} else {
				return 'exchange failed';
			}
		}
	}

?>