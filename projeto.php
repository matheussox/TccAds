<!-- PÁGINA HTML -->

<!doctype html>
<html class="body" lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>EmpreSys 1.0 - HOME</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Righteous&family=Roboto+Mono:wght@700&family=Roboto:wght@300&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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

  <br>
  <center>
    <h1> PROJETOS CADASTRADOS NO SISTEMA </h1>
    <center>
      <br>

      <div>
        <center> <img src="imagens\work.png" width="450" height="400" alt="computer"> </center>
      </div>
      <br><br><br>

</head>
<br><br><br>

<!-- PROJETOS CADASTRADOS-->

<body class="bg-light">
  <table class="table table-striped">
    <thead align="center">
      <tr>
        <th scope="col">Nº PROJETO</th>
        <th scope="col">NOME</th>
        <th scope="col">Nº DEPARTAMENTO</th>
        <th scope="col">CUSTO</th>
        <th scope="col">OPÇÕES</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once 'conexao.php';

      $sql = "SELECT * FROM projeto";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          // echo "ra: " . $row["ra"]. " - Nome: " . $row["nome"]. " " . $row["sobrenome"]. "<br>";

      ?>

          <tr align="center">
            <td><?php echo $row["nroProj"] ?> </td>
            <td><?php echo $row["nome"] ?></td>
            <td><?php echo $row["nroDep"] ?></td>
            <td><?php echo $row["custo"] ?></td>
            <td>
              <a href="editar-projeto.php?nroProj=<?php echo $row["nroProj"] ?>&idcpfGer=<?php echo $row["nroProj"] ?>"button type="button" class="btn btn-primary">EDITAR</a>
              <a href="delete-projeto.php?idnome=<?php echo $row["nome"] ?>" button type="button" class="btn btn-danger">DELETAR</a>
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

  <br>
  <button><a href="cadastrar-projeto.php" class="btn btn-primary" type="button" name="submit"> CADASTRAR NOVO PROJETO </a></button>
  </div>

  <br><br>
  <div class="bottom-container">
    <center>
      <h3>EmpreSys 1.0</h3>
    </center>
    <center>
      <spam class="credit">
        <p> Desenvolvido por Matheus Câmara & <br> Almir Junior.</p>
      </spam>
    </center>
    <center>
      <p>© 2021 - TODOS OS DIREITOS RESERVADOS</p>
    </center>
  </div>

</body>
</html>