<?php
	if(isset($_POST["log_in"])){
		session_start();
		include("config.php");
		$login = $_POST["login"];
		$password = md5($_POST["password"]);
		$db = mysqli_connect($db_ip, $db_user, $db_password,$db_name);
		$temp = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
		if(mysqli_num_rows($temp)){
			$array = mysqli_fetch_assoc($temp);
			$_SESSION["user_name"] = $array["user_name"];
			$_SESSION["login"] = $array["login"];
			$_SESSION["permission"] = $array["permission"];
		}else{
			echo "<script> window.location.href = 'sign_in.php'</script>";	
		}
		mysqli_close($db);
		echo "<script> window.location.href = 'index.php'</script>";
	}
	echo "<script> window.location.href = 'index.php'</script>";
?>