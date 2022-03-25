<?php

include_once 'conexao.php';

$nome = $_GET['idnome'];

// sql to delete a record
$sql = "DELETE FROM projeto WHERE nome=$nome";

if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>