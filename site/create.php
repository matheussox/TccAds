<?php

include_once 'conexao.php';

$cpf = $_POST['idcpf'];
$nome = $_POST['idnome'];
$telefone = $_POST['idtelefone'];
$sexo = $_POST['idsexo'];
$nroDep = $_POST['idnroDep'];



$sql = "INSERT INTO empregado (cpf, nome, telefone, sexo, nroDep)
VALUES ($cpf, '$nome', '$telefone', '$sexo', '$nroDep')";

if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";

  header('Location: index.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>