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

<section id="conteudo">
	<h2>Agendar Entrevistas</h2>



<form method="POST" action="processa_agendamento.php">
<h3>Selecionar data, horário e assistente social</h3>
<p>Data:
<select name="Data" id="Data">
<option value="10/05/2016">10/05/2016</option>
<option value="11/05/2016">11/05/2016</option>
<option value="12/05/2016">12/05/2016</option>
<option value="13/05/2016">13/05/2016</option>
<option value="14/05/2016">14/05/2016</option>
<option value=" ">Selecione</option>
</select>
<br>
Assistente: 
<select name="Assistente" id="Assistente">
<option value="Josefa">Josefa</option>
<option value="Maria">Maria</option>
<option value="Auxiliadora">Auxiliadora</option><br>
<option value=" ">Selecione</option>

</select><br>
Horário: 
<select name="Horario" id="Horario">
<option value="8:00hs as 11:30hs">8:00hs as 11:30hs</option>
<option value="14:00hs as 17:30hs">14:00hs as 17:30hs</option><br>
<option value=" ">Selecione</option>
</select>
</p>
<input type="submit" value="Agendar"></input>
<!--<button><a href="confirmacao_agendamento.html">Enviar</a></button>-->
</form>	


<a id="voltar" href="aluno_logado.html">voltar</a>
</section>

<footer>
	<p>Projeto de FPIN</p>
</footer>

</body>
</html>