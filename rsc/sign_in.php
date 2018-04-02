<?php
if($_POST["sign_in"]){
	session_start();
	include("config.php");
	$db = mysqli_connect($db_ip, $db_user, $db_password,$db_name);
	$login = $_POST["login"];
	$password = md5($_POST["password"]);
	$user_name = $_POST["user_name"];
	mysqli_query($db, "INSERT INTO `users`(`user_name`, `login`, `password`, `permission`) VALUES ('$user_name','$login','$password','0'");
	$_SESSION["user_name"] =$user_name;
	$_SESSION["login"] = $login;
	$_SESSION["permission"] = '0';
	mysqli_close($db);
	echo "<script> window.location.href = 'index.php'</script>";
}
echo "<script> window.location.href = 'index.php'</script>";
?>