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
	<form role="form" action="chat.php" method="get">
		<div class="form-group">
			<label for="this-name">我的昵称</label>
			<input type="text" class="form-control" id="this-name" name="this-name"/>
		</div>
		<div class="form-group">
			<label for="that-name">对方昵称</label>
			<input type="text" class="form-control" id="that-name" name="that-name"/>
		</div>
		<button type="submit" class="btn btn-default">开始聊天</button>
	</form>
	<br/>
	<a href="group_log_in.php">群聊</a>
</body>
</html>