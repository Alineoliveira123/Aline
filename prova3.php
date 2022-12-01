<?php

class carro 

{

public $tipo = "Fiat Strada";
public $ano = 2022;
public $cor = "Branco";
public $quantidadePortas = 4;
public $estado = "Novo";

public function tipo () {

echo "tipo :{$this->tipo }<br>";
echo "ano :{$this->ano }<br>";




}

public function aparencia () {

    echo "cor :{$this->cor }<br>";
    echo "estado :{$this->estado }<br>";
   
    
    
    
    }
    public function portas () {
        echo "quantidade de portas:{$this->quantidadePortas }<br>";
        
        }


}
$carro = new carro ();
$carro -> tipo ();
$carro -> aparencia ();
$carro -> portas ();
