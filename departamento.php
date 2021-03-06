<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>EmpreSys 1.0 - DEPARTAMENTO</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <h2>EmpreSys</h2>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php">
          <p>HOME</p>
        </a>
        <a class="nav-item nav-link" href="empregados.php">
          <p>EMPREGADOS</p>
        </a>
        <a class="nav-item nav-link" href="dependentes.php">
          <p>DEPENDENTES</p>
        </a>
        <a class="nav-item nav-link" href="departamento.php">
          <p>DEPARTAMENTOS</p>
        </a>
        <a class="nav-item nav-link" href="projeto.php">
          <p>PROJETOS</p>
        </a>
      </div>
    </div>
  </nav>
</head>

<body class="bg-light">
  <h1> DEPARTAMENTOS <br> CADASTRADOS NO SISTEMA </h1>
  <br>
  <div>
  <img src="imagens\work.png" width="450" height="400" alt="computer"> </center>
  </div>
 <br><br><br>

<!-- DEPARTAMENTOS CADASTRADOS-->
<body class="bg-light">
  <table class="table table-striped">
    <thead align="center">
      <th scope="col">Nº DEPARTAMENTO</th>
      <th scope="col"> NOME</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">CPF</th>
      <th scope="col">OPÇÕES</th>
  </thead>

  <!-- CÓDIGO CONEXÃO C/ BD -->
  <tbody>
      <?php
      include_once 'conexao.php';

      $sql = "SELECT * FROM departamento";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          // echo "ra: " . $row["ra"]. " - Nome: " . $row["nome"]. " " . $row["sobrenome"]. "<br>";

      ?>

          <tr align="center">
            <td><?php echo $row["nroDep"] ?> </td>
            <td><?php echo $row["nome"] ?></td>
            <td><?php echo $row["telefone"] ?></td>
            <td><?php echo $row["cpfGer"] ?></td>
            <td>
              <a href="editar-departamento.php?idnroDep=<?php echo $row["nroDep"] ?> &idnome=<?php echo $row["nome"] ?> &idtelefone=<?php echo $row["telefone"] ?> &idcpfGer=<?php echo $row["cpfGer"] ?> " button type="button" class="btn btn-primary">EDITAR</a>
              <a href="delete-departamento.php?idcpfEmp=<?php echo $row["cpfGer"] ?>" button type="button" class="btn btn-danger">DELETAR</a>
            </td>
          </tr>


      <?php

        }
      } else {
        echo "0 results";
      }

      mysqli_close($conn);

      ?>

    </tbody>
  </table>
    
  <!-- BOTÃO CADASTRO -->
<br>
  <a href="cadastrar-dependentes.php" class="btn btn-primary" role="button" data-bs-toggle="button">CADASTRAR NOVO DEPARTAMENTO</a>
  <br><br><br>

<!-- RODAPÉ -->
<div class="bottom-container">
  <h3>EmpreSys 1.0</h3>
  <spam class="credit">
    <p> Desenvolvido por Matheus Câmara da Silva <br> & <br> Frank Cristopher Aguilar Riera.</p>
  </spam>
    <p>TRABALHO DE CONCLUSÃO DE CURSO - ANÁLISE E DESENVOLVIMENTO DE SISTEMAS </p>
    <p>© 2021 - TODOS OS DIREITOS RESERVADOS</p>
  </div>

</body>