<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <meta name="keywords" content="студрада, КТКТ, КТКТ ЧНТУ"/>
<title>Стударада КТКТ ЧНТУ</title>
  </head>
  <body>
	<ul class = "menu">
	</ul>
	<script type="text/javascript">
    function search(data){

  window.location.href = "search.php?data="+data.value;

    }
  function down()
  {
  var a = document.getElementById('dropdown');
  if ( a.style.display == 'none' )
    a.style.display = 'block'
  else
    if ( a.style.display == 'block' )
    a.style.display = 'none';
};
</script>

<div class='main-header'>
<div class='right-header'>
<span class='header-text'>Студрада</span><br>
<span class='header-text'>Коледжу транспорту та комп'ютерних технологій ЧНТУ</span>
</div>
<div class='left-header'>
</div>
 </div>
 
 <div class='header-navigator'>
<ul>
<li><div id='header-navigator-golovna'><span><a href="index.php">Головна</a></span></div></li>
<li><div id='header-navigator-sklad'><span><a href="sklad.php">Склад студради</a></span></div></li>
<li><div id='header-navigator-pologenia'><span><a href="pologenia.php">Положення</a></span></div></li>
<li><div id='header-navigator-podii'><span><a href="podii.php">Події</a></span></div></li>
<li><div id='header-navigator-chat'><span><a href="chat/index.php">Чат студради</a></span></div></li>
<li><div id='header-navigator-avtorization'><span><a href="avtorization.php">Авторизація</a></span></div></li>
<li><input type="text" id="search-form" name="search" 
 onblur="this.value=(this.value=='')?this.title:this.value;"
 onfocus="this.value=(this.value==this.title)?'':this.value;"
 value="Search"
 title="Search"
 onkeydown="if (event.keyCode==13) {search(this)}"
/></li>
</ul>
</div>
 
<div class="avtorization">
  <div class="login">
  <form action=" " method="post">
    <h1>Вхід</h1>
    <label id="label_form">Login and E-mail:</label><br><input name="login" id="text_form" type="text" required> 
    <br>
    <label id="label_form">Password</label><br><input name="password" id="text_form" type="password" required>
    <br>
    <input type=submit name="log" value="Увійти" id="submit">
  </form>
</div>
<div class="reg">
  <form action=" " method="post">
    <h1>Реестрація</h1>
        <label id="label_form">Name</label><br><input name="name" id="text_form" type="text" required>
    <br>
        <label id="label_form">Surname</label><br><input name="surname" id="text_form" type="text" required>
    <br>
        <label id="label_form">E-mail</label><br><input name="login" id="text_form" type="text" required>
    <br>
        <label id="label_form">Password</label><br><input name="password" id="text_form" type="password" required>
    <br>

    <input type=submit name="reg" value="Реестрація" id="submit">
  </form>
</div>
</div>
<div class="footer">
  <p>Курсовий проект студентки групи ПС-1501</p>
  <p>Матвієнко Валерії</p>
  <p>© Copyright 2018 ПС-1501. All rights reserved</p>
</div>
 </body>
 <style type="text/css">
   .avtorization{
    width:80%;
    margin-left: 10%;
    margin-top: 30px;  
   }
   .avtorization h1{
    font-family:'Monotype Corsiva', 'Times New Roman';
   }
  .login{
    float: left;
    width:45%;
    margin-left: 5%;
  }
  .reg{
    float: left;
    margin-left: 3%;
    width: 45%
  }

  #text_form{
    width:90%;
    height:30px;
    border-radius: 5px;

  }
  #submit{
    width: 50%;
    margin-left: 25%;
    height:40px;
    font-size: 25pt;
    border-radius: 5px;
    background-color: #acbb7d;
    font-family:'Monotype Corsiva', 'Times New Roman';
    border-color: #acbb7d;
    margin-top: 20px;
  }
  #label_form{
     font-family:'Times New Roman';
  }
 </style>
</html>
<?php
//спрацювала кнопка увійти
if(isset($_POST["log"])){
$login = $_POST["login"];
$password = $_POST["password"];
$bd = mysqli_connect($bd_ip, $bd_user, $bd_password, $bd_name);
$user = mysqli_query($bd,"SELECT * FROM `login` WHERE `login` = '$login' AND `password` = '$password'");
if(!mysqli_num_rows($user)){
  echo '<script>alert("Неверно введений логин чи пароль")</script>';
  exit();
}
  $row = mysqli_fetch_assoc($user);
  $_SESSION["login"] = $login;
  $_SESSION["password"] = $password;
  $_SESSION["name"] = $row["name"];
  $_SESSION["surname"]  = $row["surname"];
  echo '<script>  window.location.href = "index.php"</script>';
  exit();
}
//спрацювала кнопка реестрація
if(isset($_POST["reg"])){
$name = $_POST["name"];
$surname = $_POST["surname"];
$login = $_POST["login"];
$password_user = $_POST["password"];
$bd = mysqli_connect($host, $user, $password, $bd_name);
mysqli_query($bd, "INSERT INTO `login`(`login`, `password`, `name`, `surname`) VALUES ('$login', '$password_user', '$name', '$surname')");
  $_SESSION["login"] = $login;
  $_SESSION["password"] = $password_user;
  $_SESSION["name"] = $name;
  $_SESSION["surname"]  = $surname;
  echo '<script>  window.location.href = "index.php"</script>';
}

?>