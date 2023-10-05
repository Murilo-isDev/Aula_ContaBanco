<?php

require "Conta.php";

$c1 = new Conta();

$c1->numeroConta = "12345678912";
$c1->nomeTitular = "José";
$c1->saldo = "1000";


$c1->depositar(300);
$c1->sacar(200);
$c1->mostrarSaldo();
$c1->dados();

?>