<?php
//Definindo URL do sistema e dados padrões
$host = 'https://syslibary.tk';
$title = 'SysLibary System';
date_default_timezone_set('America/Sao_Paulo');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'biblioteca');

$PDO = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);

// Verificar se o usuário já está logado (por exemplo, se a sessão está definida)
function verificalogado(){
session_start();
    if (!isset($_SESSION['cpf'])) {
        header("Location: ../");
        exit;
    }
}

function verificadeslogado(){
    session_start();
    if (isset($_SESSION['cpf'])) {
        header("Location: sistema/");
        exit;
    }
}

// Função para gerar um "salt" exclusivo
function generateUniqueSalt($length = 22) {
    $randomBytes = random_bytes($length);
    $salt = base64_encode($randomBytes);
    $salt = str_replace('+', '.', $salt);
    return substr($salt, 0, $length);
}
function sair(){
    session_start();
    session_destroy();
}
if (isset($_POST['action']) && $_POST['action'] === 'sair') {
    // Chame a função sair() ou qualquer outra ação de logout
    sair();
}
?>
