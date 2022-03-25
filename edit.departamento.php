<?php

include_once 'conexao.php';
// $result_usuario = "SELECT * FROM empregado WHERE cpf=$cpf";
// $resultado_usuario = mysqli_query 


$nroDep = $_POST['idnroDep'];
$nome = $_POST['idnome'];
$telefone = $_POST['idtelefone'];
$cpfGer = $_POST['idcpfGer'];

$sql = "UPDATE dependente 
SET nroDep='$ndroDep', nome='$nome', telefone='$telefone', cpfGer='$cpfGer' WHERE cpfGer='$cpfGer'";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";

  header('Location: index.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>