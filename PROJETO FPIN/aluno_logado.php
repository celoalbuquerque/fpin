<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
	<title>HOME</title>
	<meta charset="utf-8">
	<meta name="descrition" content="Home">
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
<header>
<h1> Coordenadoria de Serviço Social - IFAL </h1>
</header>

<nav>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="noticias.html">Notícias</a></li>
		<li><a href="material.html">Editais e Resultados</a></li>
		<li><a href="areadoaluno.html">Área do Aluno</a></li>
		<li><a href="areadoservidor.html">Área do Servidor</a></li>
		<li><a href="contato.html">Contato</a></li>
		<li><a href="sobre.html">Sobre</a></li>
	</ul>	
</nav>

<section>
	<h2><?php echo "Seja bem vindo, " .$_SESSION["usuario"]. 	"!";?></h2>
	<ul id="menu_interno">
	<li><a href="agendar_entrevista.php">Agendar Entrevista</a></li>
	<li><a href="agendamento.html">Agendamentos</a></li>
	<li><a href="resultado_aluno.html">Resultados</a></li>
	<li><a href="index.html">Sair</a></li>
	</ul>	
	<br><br><br><br><br>
	<p>Use o menu acima para visualizar o andamento de seu agendamento, resultados, alterar seus dados pessoais. Se necessário nos mande-nos um e-mail ou nos contate <a href="#">aqui<a>.
</section>

<footer>
	<p>Projeto de FPIN</p>
</footer>

</body>
</html>