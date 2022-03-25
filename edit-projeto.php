<?php

include_once 'conexao.php';
// $result_usuario = "SELECT * FROM empregado WHERE cpf=$cpf";
// $resultado_usuario = mysqli_query 


$nroProj = $_POST['idnroProj'];
$nome = $_POST['idnome'];
$nroDep = $_POST['idnroDep'];
$custo = $_POST['idcusto'];

$sql = "UPDATE projeto 
SET nroProj='$nroProj', nome='$nome', nroDep='$nroDep', custo='$custo' WHERE nome='$nome'";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";

  header('Location: index.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>