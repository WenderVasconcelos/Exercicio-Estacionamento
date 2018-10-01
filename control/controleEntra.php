<?php

include_once '../model/entrada.php';

$e = new entrada();

$e->placa = $_POST['placa'];
$e->vaga = $_POST['vaga'];
$e->entrada = $_POST['entrada'];

echo $e;