<?php
require_once 'RH.php';

foreach($func as $funcionario){
    echo $funcionario->getDados();
    sleep(1);
}

$rh = new RH();
echo $rh->contratar();
sleep(1);
echo $rh->contratar();
sleep(1);
echo $rh->demitir();
sleep(1);
echo $rh->demitir();
sleep(1);
?>