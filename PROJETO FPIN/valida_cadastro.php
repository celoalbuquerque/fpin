<?php
	$matricula = $_POST['matricula'];
	$Nome = $_POST['Nome'];
	$Telefone = $_POST['Telefone'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirmasenha = $_POST['confirmasenha'];

	session_start();
	$_SESSION['usuario'] = $matricula;
	$_SESSION['senha'] = $senha;
?>