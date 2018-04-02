<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/1.css">
	<title></title>
</head>
<body>
	<div id="head">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10" id="header">
				
				<img src="css/12.png" height="40%" alt="" id="plack">
				
				<input type="text" class="form-control" id="Search" placeholder=" Search">
			</div>
		</div>	
	</div>
	<?php
		include("nav.php");
	?>
		<div class="row">
			<div class="col-md-1"></div>

			<div class="col-md-10" id="content">
				<div class="row">
					<div class="col-md-3" id="item">
						
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-8" id="news">
						
					</div>
				</div>
			</div>	
			<div class="col-md-1"></div>
		</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>