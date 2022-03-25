<?php

include_once 'conexao.php';
// $result_usuario = "SELECT * FROM empregado WHERE cpf=$cpf";
// $resultado_usuario = mysqli_query 


$nome = $_POST['idnome'];
$telefone = $_POST['idtelefone'];
$sexo = $_POST['idsexo'];
$cpf = $_POST['idcpf'];

$sql = "UPDATE empregado 
SET nome='$nome', telefone='$telefone', sexo='$sexo' WHERE cpf='$cpf'";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";

  header('Location: index.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>