<!-- CONEXAO COM O BANCO -->
<?php ;
$nome = $_GET['idnome'];
$cpfEmp = $_GET['idcpfEmp'];
$dataNasc = $_GET['dataNasc'];
$sexo = $_GET['idsexo'];
$relacao = $_GET['idrelacao'];

?>

<!-- PÁGINA HTML -->

<!doctype html>
<html class="body" lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>EmpreSys 1.0 - EDITAR DEPENDENTES</title>
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
    <h1> EDITAR DEPENDENTES </h1>
    <center>
      <br>

      <div>
        <center> <img src="imagens\work.png" width="450" height="400" alt="computer"> </center>
      </div>
      <br><br><br>
      
</head>
<br><br><br> 

<body class="bg-light">

<!-- CPF -->
<form class="row g-3" action="edit-dependentes.php" method="POST">
    <div class="form-row">
    <div class="col-md-4 mb-3">
    <label for="idcpfEmp" class="form-label">CPF do Dependente</label>
    <input placeholder="cpfEmp" name="idcpfEmp" id="idcpfEmp" type="text" class="validate" value="<?php echo $cpfEmp; ?>" >
  </div>

<!-- NOME -->
  <div class="col-md-4 mb-3">
    <form class="col s12" action="edit-dependentes.php" method="POST" >
    <label for="idnome" class="form-label">Nome do Dependente</label>
    <input placeholder="nome" name="idnome" id="idnome" type="text" class="validate" value="<?php echo $nome; ?>" >
</div>

<!-- DATA NASC -->
<div class="col-md-4 mb-3">
    <form class="col s12" action="edit-dependentes.php" method="POST" >
    <label for="dataNasc" class="form-label">Data de Nascimento</label>
    <input placeholder="dataNasc" id="iddataNasc" type="date" class="validate" value="<?php echo $dataNasc; ?>" >
</div>


<!--SEXO -->
<div class="col-md-3">
            <label for="validationCustom04" class="form-label">Escolha seu Sexo: <br> (M) MASCULINO <br> (F) FEMININO</label>
            <select class="form-select" name="idsexo" id="idsexo" value="<?php echo $sexo; ?>" required>
              <option selected enable value="">Choose...</option>
              <option>M</option>
              <option>F</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div>
          <br>

<!-- RELAÇÃO C/ DEPENDENTE -->
<div class="col-md-4 mb-3">
    <form class="col s12" action="edit-dependentes.php" method="POST" >
    <label for="relacao" class="form-label">Relacao com o Empregado</label>
    <input placeholder="relacao" name="idrelacao" id="idrelacao" type="text" class="validate" value="<?php echo $relacao; ?>" >
</div>



<!-- BOTÃO ENVIAR -->
<br><br>
<button class="btn btn-primary" type="submit" name="action">Atualizar</button>
<br><br>
</form>

<!-- RODAPÉ -->
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
