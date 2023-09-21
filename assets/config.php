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

?>
