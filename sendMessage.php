<?php
require_once("medoo.php");
$database=new medoo();
$database->insert(
	"messages",
	array(
		"from"=>$_POST["thisName"],
		"to"=>$_POST["thatName"],
		"message"=>$_POST["message"]
	)
);
?>