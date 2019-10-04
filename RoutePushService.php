<?php 
session_start();
header("Content-Type:application/x-www-form-urlencoded; charset=utf-8");
// Cross-Origin Resource Sharing Header
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

define('_ROOT', str_replace("\\", '/', dirname(__FILE__)));


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="TWBSP Function">
	<meta name="keywords" content="RoutePushService">
	<meta name="author" content="SF-Express">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RoutePushService</title>
</head>
<body>
<?php

    $mailno=$_POST["mailno"];
    $orderid=$_POST["orderid"];
    $route_msg_id=$_POST["route_msg_id"];
    $acceptTime=$_POST["acceptTime"];
    $acceptAddress=$_POST["acceptAddress"];
    $remark=$_POST["remark"];
    $opCode=$_POST["opCode"]; 
    if (($mailno!="") && ($orderid!="") && ($route_msg_id!="") && ($acceptTime!="") && ($acceptAddress!="") && ($remark!="")){
		echo "<Response service='RoutePushService'><Head>OK</Head></Response>";
	}else{
		echo "<Response service='RoutePushService'><Head>ERR</Head><ERROR code='4001'>系統發生數據錯誤或運行時異常</ERROR></Response>";

	}



?>	
</body>
</html>