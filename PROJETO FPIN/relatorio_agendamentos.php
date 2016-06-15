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
	<li><a href="#">Gerar Relatório de Agendamentos</a></li>
	<li><a href="disponibiliza_resultado.html">Disponibilizar Resultados</a></li>
	<li><a href="index.html">Sair</a></li>
	</ul>

	<h3>RELATÓRIOS DOS AGENDAMENTOS EFETUADOS</h3>
	<?php
		$con=mysqli_connect("localhost","root","","fpin");
		$sql_relatorio = mysqli_query($con, "Select * from agendamento");
		while ($exibe = mysqli_fetch_assoc($sql_relatorio) ) { // Obtém os dados da linha atual e avança para o próximo registro
  			
  			
  			 $login_aluno = $exibe['login_aluno'];
  			 $data= $exibe['DATA'];
  			 $assistente= $exibe['ASSISTENTE'];
  			 $horario=$exibe['HORARIO'];	

  			echo "<table>"; 
			echo  "<tr><td><b>Matricula:</b></td>";
			echo "<td> ".$exibe["login_aluno"]." - </td>";
			echo "<td> <b>DATA:</b> ".$exibe["DATA"]." - </td>";
			echo "<td> <b>ASSISTENTE:</b> ".$exibe["ASSISTENTE"]." - </td>";
			echo "<td> <b>HORARIO:</b> ".$exibe["HORARIO"]."</td></tr></table>";		

		}

	?>


</section>

<footer>
	<p>Projeto de FPIN</p>
</footer>

</body>
</html>