<?php
require_once("medoo.php");
$database=new medoo();
$group_users=$database->select(
	"group",
	"user_name",
	array(
		"group_id"=>1
	)
);

$targets=array();

foreach($group_users as $group_user){
	if($group_user != $_POST['thisName']){
		array_push($targets,$group_user);
	}
}

foreach($targets as $target){
	$database->insert(
		"messages",
		array(
			"from"=>$_POST["thisName"],
			"to"=>$target,
			"message"=>$_POST["message"]
		)
	);
}
?>