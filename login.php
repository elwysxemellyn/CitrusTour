<?php

include("connection.php");

// $connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
// $db = mysql_select_db('nome_do_banco_de_dados');

$entrar = $_POST['entrar']?$_POST['entrar']: "";

echo "$entrar<br>";

  if ($entrar != "") {

    $login = $_POST['login']?$_POST['login']: "";
    $senha = $_POST['senha']?$_POST['senha']: "";

    echo "$login<br>";
    echo "$senha<br>";

    $verifica = mysqli_query($mysqli, "SELECT * FROM crud WHERE emal = '$login' AND password = '$senha'") or die("Could not execute the insert query.");
    // $verifica = mysql_query("SELECT * FROM usuarios WHERE login =
    // '$login' AND senha = '$senha'") or die("erro ao selecionar");
    $linhas = mysqli_num_rows($verifica);
    echo "$linhas";
      if ($linhas<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Logado.');window.location
        .href='login.html';</script>";
        // header("Location:index.php");
      }
  }
?>

<html>
<head>
<title> Login de Usuário </title>
</head>
<body>
<form method="POST" action="">
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="cadastro.html">Cadastre-se</a>
</form>
</body>
</html>