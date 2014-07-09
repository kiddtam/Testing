<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<style>
		.well{
			position:absolute;
		top:50%;
		left:50%;
		margin:-100px 0 0 -100px;
		width:200px;
		}
	</style>
</head>
<body>
	<div class="well">
	<form action='/login/profile' method="post">
		<p>Username</p><input type="text" name="username">
		<p>Password</p><input type="password" name="password">
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	<?php echo $message;?>
</body>
</html>
