<?php include_once 'topo.php' ?>

<h3> Cadastrar Empregado  </h3>

<div class="row">
    <form class="col s12" action="create.php" method="POST" >
      <div class="row">
        <div class="input-field col s3">
          <input placeholder="cpf" name="idcpf" id="idcpf" type="text" class="validate">
          <label for="idcpf">Cpf</label>
        </div>
      
      </div>


      <div class="row">
        <div class="input-field col s6">
        <input placeholder="Nome" name="idnome" id="idnome" type="text" class="validate">
          <label for="idnome">Nome</label>
        </div>

        <div class="input-field col s6">
        <input placeholder="telefone" name="idtelefone" id="idtelefone" type="text" class="validate">
          <label for="idtelefone">Telefone</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s6">
        <input placeholder="sexo" name="idsexo" id="idsexo" type="text" class="validate">
          <label for="idsexo">Sexo</label>
        </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
    <i class="material-icons right">send</i>
  </button>
        
   
    </form>


    <br>




  </div>


<?php include_once 'rodape.php' ?>