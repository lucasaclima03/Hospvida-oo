<?php
class Hospital {
    private $id;
    private $nome;
    private $endereco;
    private $lat;
    private $lng;
    private $observacoes;

    public function getId(){
        return $this->id;
    }
    public function setId($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getLat(){
        return $this->lat;
    }
    public function setLat($lat){
        $this->lat = $lat;
    }
    public function getLng(){
        return $this->lng;
    }
    public function setLng($lng){
        $this->lng = $lng;
    }
    public function getObservacoes(){
        return $this->observacoes;
    }
    public function setObservacoes($observacoes){
        $this->observacoes = $observacoes;
    }
}