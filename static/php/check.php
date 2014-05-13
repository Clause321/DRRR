<?php
session_start();
define("IncludePath","/media/Linux/Web");
set_include_path(constant("IncludePath"));
include 'config.php';
include 'SQLClass.php';


$ip=getenv("REMOTE_ADDR");


$select_exist="SELECT ip,is_online FROM client WHERE ip=INET_ATON('".$ip."') AND is_online=1;";

$result=$mysqli->query($select_exist);
if($result->num_rows){
	$_SESSION["error"]="Name existed";
	header('Location:../index.php',true);
}
else{
	$_SESSION["username"]=$_POST["username"];
	$_SESSION["icon"]=$_POST["icon"];
	$query_add="INSERT INTO client(ip,nickname,icon,is_online,login_time) VALUES(INET_ATON('".$ip."') ,'".$_POST["username"]."','".$_POST["icon"]."',1,'".date("Y-m-d H:i:s")."');";
	$mysqli->query($query_add);
	$_SESSION["PID"]=$mysqli->insert_id;
	header('Location:../Room.php',true);
}
$mysqli->close();
?>
