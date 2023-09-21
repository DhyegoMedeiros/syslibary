<?php
	session_start();
	require("../config.php");
	$matricula = $_POST['matricula'];
	$pass = md5($_POST['senha']);

	$sql = $PDO->query("SELECT cpf, senha FROM bibliotecario WHERE cpf='$matricula' AND senha='$pass'");
	if ($sql->rowCount() > 0) {
		$_SESSION['cpf'] = $matricula;
		$_SESSION['senha'] = $pass;
        echo "<script>location.href='$host/sistema'</script>";
	}else{
		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
		echo "<script>alert('Usuario ou senha Invalidos.');</script>";
		echo "<script>location.href='$host'</script>";
	}
?>