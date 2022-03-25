<?php

include_once 'conexao.php';

$nome = $_POST['idnome'];
$cpfEmp = $_POST['idcpfEmp'];
$dataNasc = $_POST['iddataNasc'];
$sexo = $_POST['idsexo'];
$relacao = $_POST['idrelacao'];



$sql = "INSERT INTO dependente (nome, cpfEmp, dataNasc, sexo, relacao)
VALUES ($nome, '$cpfEmp', '$dataNasc', '$sexo', '$relacao')";

if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";

  header('Location: index.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>