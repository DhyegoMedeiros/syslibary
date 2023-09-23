<?php
	session_start();
	require("../config.php");
	$matricula = $_POST['matricula'];
    $sql = $PDO->prepare("SELECT nickname, senha, salt, sts_nivel FROM acesso WHERE nickname=:nickname and sts_nivel='1'");
    $sql->bindParam(':nickname', $matricula);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $hashedPasswordDB = $row['senha'];
        $salt = $row['salt'];

        $senhaInserida = $_POST['senha'];
        $senhaComSalt = $senhaInserida . $salt;

        if (password_verify($senhaComSalt, $hashedPasswordDB)) {
            // Senha correta
            $_SESSION['cpf'] = $matricula;
            echo "<script>location.href='$host/sistema'</script>";
        } else {
            // Senha incorreta
            echo "<script>alert('Usuário ou senha inválidos.');</script>";
            echo "<script>location.href='$host'</script>";
        }
    } else {
        // Usuário não encontrado no banco de dados
        echo "<script>alert('Usuário não encontrado, ou você não tem acesso.');</script>";
        echo "<script>location.href='$host'</script>";
    }
?>