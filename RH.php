<?php
require_once 'FuncionarioRepository.php';
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

class RH extends FuncionarioRepository {
    protected bool $contratar;
    protected bool $demitir;

    public function __construct(){
        $this->contratar = false;
        $this->demitir = false;  
    }
}

$func[0] = new FuncionarioCLT("Felipe", "(19)4002-8922","felipe@felipe.com", "123.123.123-45");
$func[1] = new FuncionarioPJ("Jorge", "(19)8922-4002", "jorge@jorge.com", "12.123.123/1234-56");
?>