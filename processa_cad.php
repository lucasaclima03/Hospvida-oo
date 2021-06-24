<?php
include 'Conexao.php';
include 'HospitalDAO.php';

$dao = new HospitalDAO ($pdo) ;
$hospital = new Hospital();

if (isset($_POST['cadastrar'])) {
    $hospital->setNome($_POST['nome']);
    $hospital->setEndereco($_POST['endereco']);
    $hospital->setLat($_POST['lat']);
    $hospital->setLng($_POST['lng']);
    $hospital->setObservacoes($_POST['observacoes']);

    $dao->adicionar($hospital);

    header('Location:index.php');
}

