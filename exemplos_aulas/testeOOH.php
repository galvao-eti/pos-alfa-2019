<?php
require '../autoload.php';

$a = new OOAlfa\Admin('galvao@php.net', '1234.5');
$a->excluir();

echo $a->matricula;

