<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title>小马在线聊天</title>
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="row clearfix">
	<div class="col-md-12 column">
	<form role="form" action="group_chat.php" method="get">
		<label for="this-name">我的昵称</label>
		<div class="radio">
			<label>
				<input type="radio" name="this-name" id="horse" value="小马">小马
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="this-name" id="pig" value="小猪">小猪
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="this-name" id="dog" value="小狗">小狗
			</label>
		</div>
		<button type="submit" class="btn btn-default">开始聊天</button>
	</form>
	<br/>
	<a href="index.php">单聊</a>
	</div>
	</div>
	</div>
</body>
</html>