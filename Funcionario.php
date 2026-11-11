<?php
class Funcionario{
    protected string $nome;
    protected string $numero;
    protected string $email;

    public function __construct(string $nome, string $numero, string $email){
        $this->nome = $nome;
        $this->numero = $numero;
        $this->email = $email;
    }

    public function getDados(){
        return "Nome: {$this->nome} | Numero: {$this->numero} | Email: {$this->email}\n";
    }
}
?>