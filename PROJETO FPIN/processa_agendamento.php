
<?php
	session_start();
	$con=mysqli_connect("localhost","root","","fpin");

	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

	$data=$_POST["Data"];
	$assistente=$_POST["Assistente"];
	$horario=$_POST["Horario"];
	$user=$_SESSION["usuario"];

$sql = "INSERT INTO agendamento (login_aluno, data, assistente, horario)
VALUES ('$user', '$data', '$assistente', '$horario')";

if ($con->query($sql) === TRUE) {
    echo "<script>
			alert ('AGENDAMENTO EFETUADO COM SUCESSO.');
			window.location.href='aluno_logado.php';
		</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;

    echo "<script>
			alert ('VOCÊ JÁ TEM UM AGENDAMENTO.');
			window.location.href='aluno_logado.php';
		</script>";
}

?>