<?php



#include('conecta.php');

$con=mysqli_connect("localhost","root","","fpin");

$administrador=$_POST['usuario'];

$senha=$_POST['senha'];

$sql=mysqli_query($con, "select * from adm where administrador='$administrador' and senha='$senha'");

$row=mysqli_num_rows($sql);

if ($row > 0)

{
session_start();
$_SESSION["usuario"]=$_POST["usuario"];

$_SESSION['login'] = true;

echo "<script>window.location.href= 'servidor_logado.php';</script>";

}

else

{

echo "<script>

alert ('login errado');

window.location.href='areadoaluno.html';</script>";

}



?>