<?php
require_once 'Funcionario.php';
class FuncionarioCLT extends Funcionario{
    private string $cpf;

    public function __construct(string $nome, string $numero, string $email, string $cpf){
        parent::__construct($nome, $numero, $email);
        $this->cpf = $cpf;
    }

    public function getDados(){
        return "Nome: {$this->nome} | Numero: {$this->numero} | Email: {$this->email} | CPF: {$this->cpf}\n";
    }
}


?>