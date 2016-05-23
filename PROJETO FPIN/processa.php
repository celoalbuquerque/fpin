<?php
	include ('conecta.php');
	$matricula=$_POST['matricula'];
	$nome=$_POST['nome'];
	$telefone=$_POST['telefone'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$sql=$mysqli->prepare("insert into cadastro_alunos values (?,?,?,?,?)");
	$sql->bind_param("issss", $matricula, $nome, $telefone, $email, $senha);
	$sql->execute();
	$sql->store_result();
	$result=$sql->affected_rows;
	if ($result > 0)
	{
		echo "<script> alert ('Cadastro efetuado com sucesso!');
		window.location.href='areadoaluno.html';</script>";

	}
	else
	{
		echo 'Erro';
	}

?>