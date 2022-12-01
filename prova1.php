<?php

class carro
{
    
    public $Tipo;
    public $ano;
    public $cor;
    public $quantidadePortas;
    public $estado;
    
   

 
    public function Dados()
    {
        return "O tipo do carro de Maria é {$this->tipoCarro} , <br>, o ano do carro é  {$this->ano} ,<br>, a cor do carro é  {$this->cor} ,<br>, a quantidade de portas é {$this->quantidadePortas} , <br>, o estado do carro é  {$this->estado}.";
    }

}


$carro = new carro;

$carro ->tipoCarro = "Fiat Strada";
$carro ->ano = 2022;
$carro ->cor = "Branco";
$carro ->quantidadePortas = 4;
$carro ->estado = "novo";

echo $carro->Dados();

echo "<br>";






