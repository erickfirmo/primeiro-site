<?php

class Animal
{
    public $especie;
    public $nome;
    public $idade;
    public $cor;
    public $descricao;

    public function __construct($esp) { $this->setEspecie($esp); }
    
    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie($esp)
    {
        $this->especie = $esp;
    }
}



