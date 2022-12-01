<?php

class escola 

{

public $nomeEscola = "Doce Escola";
public $grauEscolaridade = "Ensino Fundamental";
public $cor = "Amarelo e A zul";
public $quantidadeAlunos = 320;
public $cidade = "ibirite";

public function tipo () {

echo "tipo :{$this->grauEscolaridade }<br>";
echo "escolaridade :{$this->grauEscolaridade }<br>";




}

public function aparencia () {

    echo "cor :{$this->cor }<br>";
    echo "Nome :{$this->nomeEscola }<br>";
   
    
    
    
    }
    public function capacidade () {
        echo "quantidade de estudantes:{$this->quantidadeAlunos }<br>";
        
        }


}
$escola = new escola ();
$escola -> tipo ();
$escola -> aparencia ();
$escola -> capacidade ();
