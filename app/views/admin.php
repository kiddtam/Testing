<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

	


	<style>
		.content{
			margin: 20px;
		}
	</style>
</head>
<body>
<div class="content">
<ul class="nav nav-pills nav-justified">
  <li class="active"><a href="/admin">Orders</a></li>
  <li><a href="/transactions">Profile</a></li>
  <li><a href="/users">Users</a></li>
</ul>
<div class="content">
<div class="container-fluid">
	<div class="row-fluid">
		

	<table class="table table-hover">
			<thead>

		<tr>
			<th>
				User:
			</th>
			<th>
				Device-id:
			</th>
			<th>
				APP:
			</th>
			<th>
				Points:
			</th>
			<th>
				Buttons:
			</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($orders as $o) {
		echo '<tr id="'.$o->order_id.'">
		<td>'.$o->user_id.'</td>
		<td>'.$o->dev_id.'</td>
		<td>'.$o->ad_name.'</td>
		<td>'.$o->points.'</td>
		<td><button class="btn btn-warning change-info" type="button" data-toggle="modal" data-target="#'.$o->order_id.'" >Details</button></tr>
			<!-- Modal -->
		<div class="modal fade" id="'.$o->order_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
   		 <div class="modal-content">
     	 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Details</h4>
     	 </div>
      	<div class="modal-body">
				<p>Order ID: '.$o->order_id.'</p>
				<p>App ID: '.$o->app_id.'</p>
				<p>App Name: '.$o->ad_name.'</p>
				<p>Ad ID: '.$o->ad_id.'</p>
				<p>User ID: '.$o->user_id.'</p>
				<p>Device ID: '.$o->dev_id.'</p>
				<p>Channel: '.$o->chn.'</p>
				<p>Price: '.$o->price.'</p>
				<p>Points: '.$o->points.'</p>
				<p>Time: '.$o->time.'</p>
			
     	 </div>
     	 <div class="modal-footer">
       	 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
		';
	}	
		?>

	</tbody>
	</table>
	</div>
		</div>
</div>

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</div>
</body>
</html>
