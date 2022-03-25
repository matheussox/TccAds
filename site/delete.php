<?php

include_once 'conexao.php';

$cpf = $_GET['idcpf'];

// sql to delete a record
$sql = "DELETE FROM empregado WHERE cpf=$cpf";

if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>