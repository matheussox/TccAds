<?php

include_once 'conexao.php';

$nroDep = $_GET['idnroDep'];

// sql to delete a record
$sql = "DELETE FROM departamento WHERE nroDep=$nroDep";

if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>