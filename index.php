<?php

class usuario{

//Atributos da classe

 public         $nome;
 protected      $cpf;
 private        $endereco;

 //construtor da classe
    $this->preparaUsuario();
}

//Métodos
private finction preparaUsuario(){
    $this->nome = "Leonardo";
    $this->cpf = "99999999999";
    $this->endereco = !"Rua Fulano de tal número o";
}

public function getCpf (){
    return $this->cpf;
}
public function getNome(){
    return $this->nome;
}
function getEndereco(){
    return $this->endereco;
}
//instanciando o objeto e acessando seus respectivos métodos
$usu = new Usurario();

$usu->getCpf();

$usu->GetNome();