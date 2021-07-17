<?php
require_once 'style/css.php';
require_once 'Conexao.php';
require_once 'dao/HospitalDAO.php';
$dao = new HospitalDAO($pdo);
?>
<div>
<table class= "table">
    <thead>
        <tr>
        <th scope ="col">ID</th>
        <th scope="col">Hospital</th>
        <th scope="col">Endereço</th>
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">Observações</th>
        <th scope="col">Opções</th>
        </tr>        
    </thead>
    
    <tbody>
    
    <?php
    $lista = $dao->listar();
    foreach($lista as $item):
    ?>
    <tr>
        <td><?php echo $item['id'];?></td>
        <td><?php echo $item['nome'];?></td>
        <td><?php echo $item['endereco'];?></td>
        <td><?php echo $item['lat'];?></td>
        <td><?php echo $item['lng'];?></td>
        <td><?php echo $item['observacoes'];?></td>
        <td>
            <div>
            <a href="editar.php?id=<?= $item['id'];?>">Editar</a>
            <a href="">Deletar</a>
            </div>
        </td>
    </tr>        
    <?php
    endforeach;
    ?>
    
    </tbody>
</table>
</div>