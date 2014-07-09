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
		.window{
			height: 100px;
			width: 100px;
			text-align: center;
			margin: auto;
			font-size: 20px;
			background-color: #cccccc;
			position: absolute;
			top: 45%;
			left:45%;

			
		}
		.bt{
		
		}
	</style>
</head>
<body>

	<div class="window">
		
		<a href="/login" class="bt">Login</a>
		<a href="/register" class="bt">Register</a>
		
		</div>
		<h3><?php echo $message; ?></h3>
</body>
</html>
