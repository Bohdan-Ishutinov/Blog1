<?php
include("config.php");
if($_GET["id"]){
	$db = mysqli_connect($db_ip, $db_user, $db_password,$db_name);
	$id = $_GET["id"];
	$temp = mysqli_query($db, "SELECT * FROM `news` WHERE `id` = '$id'");
	
	if(mysqli_num_rows($temp)){
		$array = mysqli_fetch_assoc($temp);
		$views = $array["views"] + 1;
		mysqli_query($db, "UPDATE `news` SET `views`='$views' WHERE `id` = '$id'");
		printf('');
	}
	mysqli_close($db);
}else{
echo "<script> window.location.href = 'index.php'</script>"
}
?>