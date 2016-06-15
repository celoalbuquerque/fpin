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
	<li><a href="nova_noticia.html">Inserir Nova Notícia</a></li>
	<li><a href="relatorio_agendamentos.php">Gerar Relatório de Agendamentos</a></li>
	<li><a href="disponibiliza_resultado.html">Disponibilizar Resultados</a></li>
	<li><a href="index.html">Sair</a></li>
	</ul>	
</section>

<footer>
	<p>Projeto de FPIN</p>
</footer>

</body>
</html>