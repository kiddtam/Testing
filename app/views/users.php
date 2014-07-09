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
  <li ><a href="/admin">Orders</a></li>
  <li><a href="/transactions">Profile</a></li>
  <li class="active"><a href="/users">Messages</a></li>
</ul>
<div class="content">
<div class="container-fluid">
	<div class="row-fluid">
		

	<table class="table table-hover">
			<thead>

		<tr>
			<th>
				User ID:
			</th>
			<th>
				Device-id:
			</th>
			<th>
				E-mail:
			</th>
			<th>
				Points:
			</th>
			<th>
				Balance:
			</th>
			<th>
				Update time:
			</th>
			<th>
				Buttons:
			</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($users as $o) {
		echo '
		<tr id="'.$o->id.'">
		<td>'.$o->id.'</td>
		<td>'.$o->dev_id.'</td>
		<td>'.$o->email.'</td>
		<td>'.$o->points.'</td>
		<td>'.$o->balance.'</td>
		<td>'.$o->updated_at.'</td>
		<td><button class="btn btn-warning change-info" type="button"  >Modify</button></td></tr>	';
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
