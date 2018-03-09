<?php

class Animal
{
    public $especie;
    public $nome;
    public $idade;
    public $cor;
    public $caracteristica;

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










$eu = new Animal("Erick");

$a = new Animal("Alice");

echo '<p>';

print_r($a);

echo '</p>';


