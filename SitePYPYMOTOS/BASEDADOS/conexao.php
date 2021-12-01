<?php
//conexão com o servidor
$conect = mysqli_connect("127.0.0.1", "root", "", "data_moto");

// Caso a conexão seja reprovada (não for verificada), exibe na tela uma mensagem de erro

if (!$conect) {
    die("Conexão Falhou: " . mysql_connect_error());
}

//echo "Conectado com Sucesso!";

?>