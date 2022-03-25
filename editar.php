<?php include_once 'topo.php' ;


$cpf = $_GET['idcpf'];
$nome = $_GET['idnome'];
$telefone = $_GET['idtelefone'];
$sexo = $_GET['sexo'];

?>

<h3> Editar Empregados  </h3>

<div class="row">
    <form class="col s12" action="edit.php" method="POST" >
      <div class="row">
        <div class="input-field col s3">
          <input placeholder="CPF" name="idcpf" id="idcpf" type="text" class="validate" value="<?php echo $cpf; ?>" >
          <label for="idcpf">CPF</label>
        </div>
      
      </div>


      <div class="row">
        <div class="input-field col s6">
        <input placeholder="Nome" name="idnome" id="idnome" type="text" class="validate" value="<?php echo $nome; ?>">
          <label for="idnome">Nome</label>
        </div>

        <div class="input-field col s6">
        <input placeholder="Telefone" name="idtelefone" id="idtelefone" type="text" class="validate" value="<?php echo $telefone ?>">
          <label for="idsobrenome">Telefone</label>
        </div>
      </div>


      

      <div class="row">
        <div class="input-field col s12">
          <input id="sexo" name="sexo" type="sexo" class="validate" value="<?php echo $sexo; ?> ">
          <label for="sexo">Sexo</label>
        </div>
      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Atualizar
    <i class="material-icons right">send</i>
  </button>
        
   
    </form>


    <br>




  </div>


<?php include_once 'rodape.php' ?>