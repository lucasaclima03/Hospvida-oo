<?php
include 'css.php';
include 'Conexao.php';
include 'HospitalDAO.php';
$dao = new HospitalDAO($pdo);
$hospital = $dao->pegarId($_GET['id']);
?>
<div class = container>
<h1>Hospitais</h1>
<br>
<h2>Editar Novo Hospital</h2>
<br>
<form action = "processa_edit.php" method = "POST">
  <div class="mb-3">
    <input type="text" hidden class="form-control" name="id" value="<?php echo $_GET['id'];?>">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome do Hospital</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $hospital['nome'];?>">    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Endereço</label>
    <input type="text" class="form-control" name = "endereco"value="<?php echo $hospital['endereco'];?>"  >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Latitude</label>
    <input type="text" class="form-control" name = "lat" value="<?php echo $hospital['lat'];?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Longitude</label>
    <input type="text" class="form-control" name ="lng" value="<?php echo $hospital['lng'];?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Observações</label>
    <input type="text" class="form-control" name = "observacoes"value="<?php echo $hospital['observacoes'];?>" >
  </div>
  
  <button type="submit" class="btn btn-primary" name = "cadastrar">Atualizar</button>
</form>




