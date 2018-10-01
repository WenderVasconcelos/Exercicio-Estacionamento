<?php

include_once '../model/saida.php';

$s = new saida();

$s->placa = $_POST['placa'];
$s->entrada = $_POST['entrada'];
$s->saida = $_POST['saida'];


echo $s;