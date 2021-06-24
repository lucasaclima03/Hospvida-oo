<?php
include 'css.php';
?>
<div class = container>
<h1>Hospitais</h1>
<br>
<h2>Cadastrar Novo Hospital</h2>
<br>
<form action = "processa_cad.php" method = "POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome do Hospital</label>
    <input type="text" class="form-control" name="nome" >    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Endereço</label>
    <input type="text" class="form-control" name = "endereco" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Latitude</label>
    <input type="text" class="form-control" name = "lat" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Longitude</label>
    <input type="text" class="form-control" name ="lng">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Observações</label>
    <input type="text" class="form-control" name = "observacoes">
  </div>
  
  <button type="submit" class="btn btn-primary" name = "cadastrar">Cadastrar</button>
</form>



</div>
