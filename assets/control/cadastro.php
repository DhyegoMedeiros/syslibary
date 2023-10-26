<?php
    session_start();
    require("../config.php");

    // Função para cadastrar um autor
    function cadastrarAutor($nome, $pais) {
        global $PDO;
        
        // Verificar se o autor já existe no banco de dados
        $stmt = $PDO->prepare("SELECT COUNT(*) FROM autor WHERE nome = :nome");
        $stmt->bindValue(':nome', $nome);
        $stmt->execute();
        
        if ($stmt->fetchColumn() > 0) {
            return "O autor já está cadastrado.";
        }
        
        // Inserir o novo autor no banco de dados
        $stmt = $PDO->prepare("INSERT INTO autor (nome, pais, data_cadastro) VALUES (:nome, :pais, NOW())");
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':pais', $pais);

        if ($stmt->execute()) {
            return "Autor cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar o autor.";
        }
    }

    // Função para cadastrar uma editora
    function cadastrarEditora($nome, $cidade, $pais) {
        global $PDO;
        
        // Verificar se o nome da editora não está vazio
        if (empty($nome)) {
            return "Por favor, preencha o nome da editora.";
        }
        
        // Verificar se o campo "editora_nome" está definido
        if (!isset($_POST["editora_nome"])) {
            return "O campo 'Nome da Editora' não está definido.";
        }
        
        // Verificar se o campo "editora_cidade" está definido
        if (!isset($_POST["editora_cidade"])) {
            return "O campo 'Cidade da Editora' não está definido.";
        }
        
        // Verificar se o campo "editora_pais" está definido
        if (!isset($_POST["paisEditora"])) {
            return "O campo 'País da Editora' não está definido.";
        }
        
        // Recuperar os valores dos campos do formulário
        $nome = $_POST["editora_nome"];
        $cidade = $_POST["editora_cidade"];
        $pais = $_POST["paisEditora"];

        // Verificar se a editora já existe no banco de dados
        $stmt = $PDO->prepare("SELECT COUNT(*) FROM editora WHERE nome = :nome");
        $stmt->bindValue(':nome', $nome);
        $stmt->execute();
        
        if ($stmt->fetchColumn() > 0) {
            return "A editora já está cadastrada.";
        }
        
        // Inserir a nova editora no banco de dados
        $stmt = $PDO->prepare("INSERT INTO editora (nome, cidade, pais, data_cadastro) VALUES (:nome, :cidade, :pais, NOW())");
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':cidade', $cidade);
        $stmt->bindValue(':pais', $pais);

        if ($stmt->execute()) {
            return "Editora cadastrada com sucesso!";
        } else {
            return "Erro ao cadastrar a editora.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se o formulário é para autor
        if (isset($_POST["autor_nome"]) && isset($_POST["paisAutor"])) {
            // Verificar se os campos "autor_nome" e "paisAutor" não estão vazios
            if (empty($_POST["autor_nome"]) || empty($_POST["paisAutor"])) {
                echo "Por favor, preencha todos os campos do autor.";
            } else {
                $autor_nome = $_POST["autor_nome"];
                $paisAutor = $_POST["paisAutor"];
                $mensagem = cadastrarAutor($autor_nome, $paisAutor);
                echo $mensagem;
            }
        }
        
        // Verificar se o formulário é para editora
        if (isset($_POST["editora_nome"]) && isset($_POST["editora_cidade"]) && isset($_POST["editora_pais"])) {
            $editora_nome = $_POST["editora_nome"];
            $editora_cidade = $_POST["editora_cidade"];
            $editora_pais = $_POST["editora_pais"];
            $mensagem = cadastrarEditora($editora_nome, $editora_cidade, $editora_pais);
            echo $mensagem;
        }
    }
?>
