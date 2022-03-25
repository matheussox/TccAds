<?php

include_once 'conexao.php';

$cpfEmp = $_GET['idcpfEmp'];

// sql to delete a record
$sql = "DELETE FROM dependente WHERE cpfEmp=$cpfEmp";

if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>