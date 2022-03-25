<?php

include_once 'conexao.php';

$nroProj = $_POST['idnroProj'];
$nome = $_POST['idnome'];
$nroDep = $_POST['idnroDep'];
$custo = $_POST['idcusto'];


$sql = "INSERT INTO projeto (nroProj, nome, nroDep, custo)
VALUES ($nroProj, '$nome', '$nroDep', '$custo')";

if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";

  header('Location: index.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>