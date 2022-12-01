<?php

class escola
{
    
    public $nomeEscola;
    public $grauEscolaridade;
    public $cor;
    public $quantidadeAlunos;
    public $cidade;
    
   

 
    public function Dados()
    {
        return "O tipo de nome da Escola é {$this->nomeEscola} , <br>, o grau de escolaridade a ser cursado é  {$this->grauEscolaridade} ,<br>, a cor da escola é  {$this->cor} ,<br>, a quantidade de estudantes é {$this->quantidadeAlunos} , <br>, a cidade que a escola se encontra  é  {$this->cidade}.";
    }

}


$escola = new escola;

$escola ->nomeEscola = "Doce Escola";
$escola ->grauEscolaridade = "Ensino Fundamental";
$escola ->cor = "Amarelo e A zul";
$escola ->quantidadeAlunos = 320;
$escola ->cidade = "Ibirité";

echo $escola->Dados();

echo "<br>";








$carro ->tipo = "Fiat Strada";
$carro ->ano = 2022;
$carro ->cor = "branco";
$carro ->portas = 4;
$carro ->estado = "novo";