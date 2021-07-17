<?php
include 'Conexao.php';
include 'HospitalDAO.php';
$dao = new HospitalDAO($pdo);
$hospital = new Hospital();

if(isset($_POST['id'])){
    $hospital->setId($_POST['id']);
    $hospital->setNome($_POST['nome']);
    $hospital->setEndereco($_POST['endereco']);
    $hospital->setLat($_POST['lat']);
    $hospital->setLng($_POST['lng']);
    $hospital->setObservacoes($_POST['observacoes']);

    $dao->editar($hospital);
} else {
    echo "dentro do else";
}

//header('Location:index.php');

//var_dump($_POST);

?>