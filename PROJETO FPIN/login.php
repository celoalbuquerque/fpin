<?php

session_start();

#include('conecta.php');

$con=mysqli_connect("localhost","root","","fpin");

$matricula=$_POST['matricula_usuario'];

$senha=$_POST['senha'];

$sql=mysqli_query($con, "select * from cadastro_alunos where matricula='$matricula' and senha='$senha'");

$row=mysqli_num_rows($sql);

if ($row > 0)

{

$_SESSION['login'] = true;

echo "<script>window.location.href= 'aluno_logado.html';</script>";

}

else

{

echo "<script>

alert ('login errado');

window.location.href='areadoaluno.html';</script>";

}

?>