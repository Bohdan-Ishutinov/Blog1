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
	<div class="container">
		<div class="row" >
			<div class="col-xs-12 col-sm-12 col-lg-12" id="log-in" >
						<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Авторизация на сайте</h3>
								</div>
						</div>
							<div class="col-xs-6 col-sm-6 col-md-6 login-box" id="inputt">
								<form role="form">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" class="form-control" placeholder="Имя пользователя" required autofocus />
								</div>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<input type="password" class="form-control" placeholder="Ваш пароль" required />
								</div>
							<div class="col-xs-12 col-sm-12 col-md-12" id="check_box">
								<div class="checkbox">
									<label>
									<input type="checkbox" value="Remember">
									Запомнить меня  
									</label>
									<p align="right"><a href="#">Забыли свой пароль?</a></p>
								</div>

							</div>

							<p align="right"> У вас нет аккаунта? <br> <a href="#">Регистрация</a></p>
								</form>
							</div>
			</div>
		</div>
				<div class="panel-footer">
						<div class="row">
							
							<div class="col-xs-6 col-sm-6 col-md-6">
								<button type="button" class="btn btn-labeled btn-success">
								<span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Войти</button>
								<button type="button" class="btn btn-labeled btn-danger">
								<span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Выход</button>
							</div>
						</div>
				</div>
	</div>
		


	<footer class="footer">
		<div class="container">
				<p>© Copyright 2018. All rights reserved</p>
		</div>
	</footer>
</body>
</html>