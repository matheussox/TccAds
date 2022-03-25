<!-- CONEXAO COM O BANCO PARA TRAZER OS DADOS DO PROJETO-->

<?php ;
$nroProj = $_GET['idnroProj'];
$nome = $_GET['idnome'];
$nroDep = $_GET['idnroDep'];
$custo = $_GET['idcusto'];

?>

<!-- PÁGINA HTML -->

<!doctype html>
<html class="body" lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>EmpreSys 1.0 - EDITAR PROJETO</title>
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
  <center> <h1> EDITAR PROJETO </h1> <center>
  <br>

  <div> <center> <img src="imagens\work.png" width="450" height="400" alt="computer"> </center> </div>
  <br><br><br>

</head>
<br><br><br>

<!-- FORMULÁRIO EDITAR PROJETO-->

<body class="bg-light">

<!-- Nº PROJETO -->
<form class="row g-3" action="edit-projeto.php" method="POST">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="idnroProj"> Nº PROJETO </label>
        <input type="text" class="validate" id="idnroProj" placeholder="" value="<?php echo $nroProj; ?>" >
      </div>

      <!-- NOME -->
      <div class="col-md-4 mb-3">
        <label for="idnome">NOME</label>
        <input type="text" class="validate" id="idnome" placeholder="nome" value="<?php echo $nome; ?>" >
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>

      <!-- Nº DEPARTAMENTO -->
      <div class="col-md-4 mb-3">
        <label for="idnroDep">Nº DEPARTAMENTO</label>
        <input type="text" class="validate" id="idnroDep" placeholder="nroDep" value="<?php echo $nroDep; ?>" >
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>

 <!-- CUSTO -->
 <div class="col-md-4 mb-3">
        <label for="idcusto">CUSTO</label>
        <input type="text" class="validate" id="idcusto" placeholder="custo" value="<?php echo $custo; ?>" >
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>
  

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

