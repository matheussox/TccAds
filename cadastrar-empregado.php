<!-- PÁGINA HTML -->
<!doctype html>
<html class="body" lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>EmpreSys 1.0 - CADASTRAR EMPREGADOS</title>
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
  <h1> CADASTRO DE EMPREGADOS </h1>
  <center>
    <br>

    <div>
      <center> <img src="imagens\work.png" width="450" height="400" alt="computer"> </center>
    </div>
    <br><br><br>
    <center>
      <h3> Preencha o formulário abaixo para fazer o cadastro de novos usuários </h3>
      <center>
        </head>
        <br><br><br>


        <!-- FORMULÁRIO -->

        <body class="bg-light">
          <form class="form-inline" action="create.php" method="POST">
            <div class="container">
              <form class="row g-3 needs-validation" novalidate>

                <!-- CADASTRO CPF -->
                <div class="col-md-4">
                  <label for="cpf" class="form-label">Digite seu CPF</label>
                  <input name="idcpf" id="idcpf" type="text" class="form-control" id="validationCustom01" value="" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <br>

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

                  <!-- CADASTRO TELEFONE -->
                  <div class="col-md-4">
                    <label for="cpf" class="form-label">Digite seu TELEFONE</label>
                    <input name="idtelefone" id="idtelefone" type="text" class="form-control" id="validationCustom01" value="" required>
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

                  <!-- CADASTRO Nº DEPARTAMENTO -->
                  <div class="col-md-4">
                    <label for="nroDep" class="form-label">Digite o Nº do DEPARTAMENTO</label>
                    <input name="nroDep" id="nroDep" type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <br>

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