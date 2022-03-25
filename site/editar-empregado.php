<!-- CONEXAO COM O BANCO PARA TRAZER OS DADOS DO EMPREGADO-->

<?php ;
$cpf = $_GET['idcpf'];
$nome = $_GET['idnome'];
$telefone = $_GET['idtelefone'];
$sexo = $_GET['sexo'];

?>


<!-- PÁGINA HTML -->

<!doctype html>
<html class="body" lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>EmpreSys 1.0 - EDITAR EMPREGADOS</title>
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
  <h1> EDITAR EMPREGADOS </h1>
  <center>
    <br>

    <div>
      <center> <img src="imagens\work.png" width="450" height="400" alt="computer"> </center>
    </div>
    <br><br><br>

    </head>
    <br><br><br>

    <!-- FORMULÁRIO EDITAR EMPREGADO-->

    <body class="bg-light">

      <!-- CPF -->
      <form class="row g-3" action="edit-empregado.php" method="POST">
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="idcpf"> CPF </label>
            <input type="text" class="validate" id="idcpf" placeholder="cpf" value="<?php echo $cpf; ?>">
          </div>

          <!-- NOME -->
          <div class="col-md-4 mb-3">
            <label for="idnome">NOME</label>
            <input type="text" class="validate" id="idnome" placeholder="nome" value="<?php echo $nome; ?>">
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>

          <!-- TELEFONE -->
          <div class="col-md-4 mb-3">
            <label for="idtelefone">TELEFONE</label>
            <input type="text" class="validate" id="idtelefone" placeholder="telefone" value="<?php echo $telefone; ?>">
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>

          <!--SEXO -->
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Escolha seu Sexo: <br> (M) MASCULINO <br> (F) FEMININO</label>
            <select class="form-select" name="idsexo" id="idsexo" required>
              <option selected enable value="">Choose...</option>
              <option>M</option>
              <option>F</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div>
          <br>



          <br><br><br><br>

          <button class="btn btn-primary" type="submit" name="action">Atualizar</button>

      </form>
      <br><br>

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

      <br>




      </div>

    </body>


</html>