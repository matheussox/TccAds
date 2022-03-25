<?php

include_once 'conexao.php';
// $result_usuario = "SELECT * FROM empregado WHERE cpf=$cpf";
// $resultado_usuario = mysqli_query 


$nome = $_POST['idnome'];
$cpfEmp = $_POST['idcpfEmp'];
$dataNasc = $_POST['iddataNasc'];
$sexo = $_POST['idsexo'];
$relacao = $_POST['idrelacao'];

$sql = "UPDATE dependente 
SET nome='$nome', cpfEmp='$cpfEmp', dataNasc='$dataNasc', sexo='$sexo', relacao='$relacao' WHERE cpfEmp='$cpfEmp'";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";

  header('Location: index.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>