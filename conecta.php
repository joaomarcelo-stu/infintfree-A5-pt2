<?php
// Definindo os dados de conexão com o banco MySQL
$host = "sql313.infinityfree.com";
$banco = "if0_43535251_bella";
$usuario = "if0_43535251";
$senha = "qGwb68f6Jxn00b";

try {
    // Criando uma instância PDO para conectar ao banco MySQL
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    
    // Definindo o modo de erro para exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Exibindo a mensagem de erro em caso de falha na conexão
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>