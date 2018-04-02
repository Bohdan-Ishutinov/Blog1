<?php
include("config.php");
$login = $_POST["login"];
$db = mysqli_connect($db_ip, $db_user, $db_password,$db_name);
$temp = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login'");
if(mysqli_num_rows($temp)){
	echo "yes";

}else{
	echo "no";
}
mysqli_close($db);
?>