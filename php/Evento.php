<?php

class Evento{
    // Atributos
    private $id;
    private $titulo;
    private $previa;
    private $texto;
    private $tipo;
    private $data;
    
    // Contructor
    
    // My Functions

    // Gets and Sets
    public function getId(){
        return $this->id;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getPrevia(){
        return $this->previa;
    }

    public function getTexto(){
        return $this->texto;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getData(){
        return $this->data;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setPrevia(String $previa){
        $this->previa = $previa;
    }

    public function setTexto(String $texto){
        $this->texto = $texto;
    }

    public function setTipo(String $Tipo){
        $this->tipo = $Tipo;
    }

    public function setData(String $data){
        $this->data = $data;
    }
}

?>