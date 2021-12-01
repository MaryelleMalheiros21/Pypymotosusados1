<?php
//chamando o arquivo de conexão
include "conexao.php";


//recebendo os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];



//código em mysql
$insert = "INSERT INTO cliente (nome, email, senha ) VALUES ('$nome', '$email','$senha')";


//executando o código em mysql
$result = mysqli_query($conect, $insert) or die ("Falha na execução da consulta para inserir registro");

if ($result) {
	# code...
	//redirecionando o usuário
	echo "<script>
	              alert('Parabéns, aproveite nossas ofertas!');
	                              window.location='../HTML/index.html';
                                                   </script>";
}


?>