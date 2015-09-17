<?php
require_once("medoo.php");
$database=new medoo();
$nowTime=date("YmdHis");

$database->update(
	"messages",
	array("read_time"=>$nowTime),
	array(
		"AND"=>array(
			"from"=>$_GET["that-name"],
			"to"=>$_GET["this-name"],
			"read_time"=>null
		)
	)
);

$messages=$database->select(
	"messages",
	array(
		"from",
		"message",
		"send_time"
	),
	array(
		"AND"=>array(
			"from"=>$_GET["that-name"],
			"to"=>$_GET["this-name"],
			"read_time"=>$nowTime
		)
	)
);
$disp="";
foreach($messages as $message){
	$part="<p>".$message["from"]."(".$message["send_time"]."):".$message["message"]."</p>";
	$disp.=$part;
}
echo "$disp";
?>