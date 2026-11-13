<?php
$sql = "SELECT * FROM aluno 
       WHERE cpf = '$cpf' AND senha = '$senha'";

try {
    $resultado = $conexao->query($sql);

    if ( $linha = $resultado->fetch() ) {
 	  //restante do código...
?>