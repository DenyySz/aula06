<?php
abstract class conta {
    abstract function depositar($valor);
    abstract function sacar($valor);
}

class contaCorrente extends Conta {

function depositar($valor) {
    $this->$saldo -= $valor;
}

function sacar($valor) {
    $this->$saldo -= $valor;
}
function transferir($contaDestino, $valor) {
    $this->saldo -= $valor;
   }

}

$novaConta1 = new contaCorrente();

$novaConta2 = new contaCorrente();

$novaConta1->transferir('xxx-xxx', 500);

$novaConta2->depositar(500);

echo "Saldo:".$novaConta1->saldo;
echo "Saldo:".$novaConta2->saldo;