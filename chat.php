<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title>小马在线聊天</title>
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div id="hidden-div"></div>
	<div id="chat-history"></div>
	<div class="form-group">
		<input type="text" class="form-control" id="chatbox" name="chatbox"/>
	</div>
	<button type="button" class="btn btn-default" onclick="addWords()">发言</button>
</body>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script language="javascript">
	$(document).ready(function(){
		$("#hidden-div").hide();
		setInterval(reload, 3000);  
	});

	$("#chatbox").keypress(function(e){
		if (e.which == 13){
			addWords();
		} 
	}); 

	function reload(){
		$("#hidden-div").load("getMessage.php?this-name=<?php echo $_GET['this-name']; ?>&that-name=<?php echo $_GET['that-name']; ?>");
		var newMessage=$("#hidden-div").html();
		if (newMessage.length>0){
			$("#chat-history").append(newMessage);
		}
	}
	
	function addWords(){
		var messageText=$("#chatbox").val();
		var wholeMessage="<p><?php $time=date('Y-m-d H:i:s');echo $_GET['this-name'].'('.$time.'):'; ?>"+messageText+"</p>";
		$("#chat-history").append(wholeMessage);
		$("#chatbox").val("");
		$.post(
			"sendMessage.php",
			{
				thisName:"<?php echo $_GET['this-name']; ?>",
				thatName:"<?php echo $_GET['that-name']; ?>",
				message:messageText
			}
		);
	}
</script>
</html>