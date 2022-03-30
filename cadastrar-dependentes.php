<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cadastrar Dependentes</title>
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
        <a class="nav-item nav-link" href="login.html">
          <p>LOGIN</p>
        </a>
      </div>
    </div>
  </nav>
<br>
<center>
  <h1> CADASTRADOS DE DEPENDENTES </h1>
  <center>
    <br>

    <div>
      <center> <img src="imagens\work.png" width="450" height="400" alt="computer"> </center>
    </div>
    <br><br><br>
    <center>
      <h3> Preencha o formulário abaixo para fazer o cadastro de novos dependentes </h3>
      <center>
        </head>
        <br><br><br>

        <body class="bg-light">
          <form class="form-inline" action="create-dependentes.php" method="POST">
            <div class="container">

              <!-- FORMULÁRIO -->

              <form class="row g-3 needs-validation" novalidate>

                <!-- CADASTRO NOME -->
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label for="nome" class="form-label">Digite seu NOME</label>
                    <input name="idnome" id="idnome" type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <br>

                  <!-- CADASTRO CPF EMPREGADO -->
                  <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label for="cpfEmp" class="form-label">Digite o CPF do Empregado</label>
                    <input name="idcpfEmp" id="idcpfEmp" type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <br>

                  <!-- CADASTRO DATA DE NASCIMENTO -->
                    <div class="col-md-4">
                      <label for="dataNasc" class="form-label">Digite sua Data de Nascimento</label>
                      <input name="iddataNasc" id="iddataNasc" type="date" class="form-control" id="validationCustom01" value="" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <br>

                    <!-- CADASTRO SEXO -->
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

                    <!-- CADASTRO RELAÇAO C/ EMPREGADO -->
                    <form class="row g-3 needs-validation" novalidate>
                      <div class="col-md-4">
                        <label for="relacao" class="form-label">Digite sua Relação C/ o Empregado (Ex: Filho(a) /Esposa(o)</label>
                        <input name="idrelacao" id="idrelacao" type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      <br>
                    </form>


                      <button type="submit" class="btn btn-primary">CADASTRAR</button>

                      <br><br><br>
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