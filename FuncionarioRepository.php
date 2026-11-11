<?php
require_once 'FuncionarioInterface.php';
abstract class FuncionarioRepository implements FuncionarioInterface {
    #[Override]
    public function contratar(){
        if($this->contratar){
            return "Funcionário já contratado\n";
        } else {
            $this->contratar = true;
            return "Funcionário contratado\n";
        }
    }
    #[Override]
    public function demitir(){
        if($this->contratar && $this->demitir){
            return "O funcionário já foi demitido\n";
        } else {
            $this->demitir = true;
            return "Demitindo fucionário\n";
        }
    }
}
?>