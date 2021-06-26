<?php

include 'Hospital.php';
class HospitalDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        
        $this->pdo = $pdo;
    }

    public function adicionar(Hospital $hospital){
        $sql = "INSERT INTO hospitais (id, nome, endereco, lat, lng, observacoes)
        VALUES (:id, :nome, :endereco, :lat, :lng, :observacoes) ";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $hospital->getId());
        $sql->bindValue(':nome',$hospital->getNome());
        $sql->bindValue(':endereco',$hospital->getEndereco());
        $sql->bindValue(':lat', $hospital->getLat());
        $sql->bindValue(':lng',$hospital->getLng());
        $sql->bindValue(':observacoes', $hospital->getObservacoes());
        $sql->execute();
        
        return true;
    }
    public function listar(){
        $sql = "SELECT * FROM hospitais";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0){
            return $sql->fetchAll(); 
        } else {
            return array();
        }
    }
    public function pegarId($id){
        $sql = "SELECT * FROM hospitais WHERE id=:id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
        if ($sql->rowCount() > 0){
            $hospital = $sql->fetch(); 
            return $hospital;
        }else {
            return array();
        }
    }

    public function editar(Hospital $hospital) {
        $sql = 'UPDATE hospitais SET nome=:nome, endereco =:endereco, lat=:lat, lng=:lng, observacoes=:observacoes WHERE id=?';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $hospital->getNome());
        $sql->bindValue(':endereco', $hospital->getEndereco());
        $sql->bindValue(':lat', $hospital->getLat());
        $sql->bindValue(':lng', $hospital->getLng());
        $sql->bindValue(':observacoes', $hospital->getObservacoes());
        $sql->bindValue(':id', $hospital->getId());
        $sql->execute();
        
    }

   
    
}