<?php
session_start();
require("../config.php");

if (isset($_POST['matricula']) && isset($_POST['senha'])) {
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    // Gerar um "salt" exclusivo para o usuário
    $salt = generateUniqueSalt();

    // Combinar a senha com o "salt"
    $senhaComSalt = $senha . $salt;

    // Criar o hash da senha usando PASSWORD_BCRYPT
    $hashedPassword = password_hash($senhaComSalt, PASSWORD_BCRYPT);

    // Armazenar o hash da senha e o "salt" no banco de dados junto com outros dados do usuário
    $sql = "INSERT INTO acesso (nickname, senha, salt, sts_nivel) VALUES (:nickname, :senha, :salt, :nome, :sts_nivel)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':usuario', $matricula);
    $stmt->bindParam(':senha', $hashedPassword);
    $stmt->bindParam(':salt', $salt);
    $stmt->bindValue(':nickname', '');
    $stmt->bindValue(':sts_nivel', '0');
    $stmt->execute();
    
    $_SESSION['cpf'] = $matricula;
    echo "<script>location.href='$host/sistema'</script>";
} else {
    echo "Dados de registro incompletos.";
}
?>
