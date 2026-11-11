<?php
require_once 'Funcionario.php';
class FuncionarioPJ extends Funcionario{
    private string $cnpj;

    public function __construct(string $nome, string $numero, string $email, string $cnph){
        parent::__construct($nome, $numero, $email);
        $this->cnpj = $cnph;
    }

    public function getDados(){
        return "Nome: {$this->nome} | Numero: {$this->numero} | Email: {$this->email} | CNPJ: {$this->cnpj}\n";
    }
}


?>