<!doctype html>
<html class="body" lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>EmpreSys 1.0 - CADASTRAR PROJETOS</title>
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
    <h1> CADASTRADOS DE PROJETOS </h1>
    <center>
        <br>

        <div>
            <center> <img src="imagens\work.png" width="450" height="400" alt="computer"> </center>
        </div>
        <br><br><br>
        <center>
            <h3> Preencha o formulário abaixo para fazer o cadastro de novos projetos </h3>
            <center>
                </head>
                <br><br><br>

                <body class="bg-light">
                    <form class="form-inline" action="create-projeto.php" method="POST">
                        <div class="container">

                            <!-- FORMULÁRIO -->

                            <form class="row g-3 needs-validation" novalidate>

                                <!-- CADASTRO Nº PROJETO -->
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-4">
                                        <label for="nroProj" class="form-label">Digite o Nº do Projeto</label>
                                        <input name="nroProj" id="nroProj" type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <br>

                                    <!-- CADASTRO NOME PROJETO -->
                                    <div class="col-md-4">
                                        <label for="nome" class="form-label">Digite o Nome do Projeto</label>
                                        <input name="nome" id="nome" type="text" class="form-control" id="validationCustom01" value="" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <br>

                                    <!-- CADASTRO Nº DEPARTAMENTO -->
                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="col-md-4">
                                            <label for="nroDep" class="form-label">Digite o Nº do Departamento</label>
                                            <input name="nroDep" id="nroDep" type="text" class="form-control" id="validationCustom01" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <br>

                                        <!-- CADASTRO CUSTO -->
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-4">
                                                <label for="custo" class="form-label">Digite o Custo do Departamento</label>
                                                <input name="custo" id="custo" type="text" class="form-control" id="validationCustom01" value="" required>
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