<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<header class="header">
							
						<img src="css/logo.png" id="logo">
						<span ><h1 id="title"> Blog's name</h1></span>
						<ul class="nav nav-tabs" id="nav">
							  <li class="nav-item">
								    <a class="nav-link active" href="#">Active</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#">Link</a>
								  </li>
								  <li class="nav-item" id="sign_in">
								    <a class="nav-link active " href="">Sign in</a>
								  </li>
							</ul>
					</header>
				</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<div class="container" id="registration">
		<div class="row"  >
			<form>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Авторизация на сайте</h3>
					</div>
					</div>
					<div class="form-group">
					<label for="title_new">Login:<span id="necessarily">*</span></label>
					<input type="text" class="form-control" id="input_form" name="login" required>
					</div>
					<div class="form-group">
					<label for="format_new">Password:<span id="necessarily">*</span></label>
					<input type="password" class="form-control" id="input_form" name="password" required>
					</div>		

					<button type="submit" name="submit" id="baton"  class="btn btn-success">Sign up</button>
					
				</div>

				<p align="right"> У вас нет аккаунта? <br> <a href="#">Регистрация</a></p>
			</form>
	</div>



	<footer class="footer">
		<div class="container">
				<p>© Copyright 2018. All rights reserved</p>
		</div>
	</footer>
</body>
</html>

<!-- СУКАААААА -->