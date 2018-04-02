<?php
include("config.php");
$db = mysqli_connect($db_ip, $db_user, $db_password,$db_name);
$temp = mysqli_query($db, "SELECT * FROM `news` ORDER BY `id` DESC");
if(mysqli_num_rows($temp)){
	while($array = mysqli_fetch_assoc($temp)){
		printf('%s<br>%s',$array["id"], $array["title"]);
	}
mysqli_close($db);
}
?>