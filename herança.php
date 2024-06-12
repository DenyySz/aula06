<?php

class conta{

    public $saldo = 0;

    function depositar($valor) {
        $this->$saldo += $valor;
    }
    function sacar($valor) {
        $this->$saldo -= $valor;
    }
}
class contaCorrente extends conta {
    function transferir($contaDestino, $valor){
        $this->saldo -= $valor;
    }
}

$novaConta1 = new contaCorrente();

$novaConta2 = new contaCorrente();

$novaConta1->transferir('xxx-xxx', 500);

$novaConta2->depositar(500);

echo "saldo:".  $novaConta1->saldo;

echo "Saldo:". $novaConta2->saldo;