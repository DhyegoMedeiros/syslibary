<?php 

	$user = "root";
	$pass = "";
	try {
	  $conn = new PDO('mysql:host=127.0.0.1;dbname=login', $user, $pass);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$rs = $conn->query(“SELECT, nome, email * FROM usuario”);
	while($row = $rs->fetch(PDO::FETCH_OBJ)){
  	echo $row->id . “<br />”;
 	echo $row->nome . “<br />”;
 	echo $row->email . “<br />”;
}

?>