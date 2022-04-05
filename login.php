<?php
    
    include 'conexao.php';
    
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sqlLogin = "SELECT * from empregado where email='$email' and password='$password'";

    $result = mysqli_query($conn, $sqlLogin);

    $logado = 'true';

    if (mysqli_num_rows($result) > 0) {
            echo "Connected...";
       header('Location: empregados.php');
     
     } else {
       echo "Error: " . $sqlLogin . "<br>" . mysqli_error($conn);
       header('Location: login.html');
     }
     
     mysqli_close($conn);

?>