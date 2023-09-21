<?php
	session_start();
	require("../config.php");
	$matricula = $_POST['matricula'];
    $sql = $PDO->prepare("SELECT cpf, senha, salt FROM bibliotecario WHERE cpf=:cpf");
    $sql->bindParam(':cpf', $matricula);
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
        echo "<script>alert('Usuário não encontrado.');</script>";
        "<script>location.href='$host'</script>";
    }
    // Adicione essas linhas de depuração
echo "Senha inserida: " . $senhaInserida . "<br>";
echo "Hash da senha no banco de dados: " . $hashedPasswordDB . "<br>";
echo "Salt: " . $salt . "<br>";
?>