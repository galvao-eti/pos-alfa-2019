<?php
require __DIR__ . '/../src/Usuario.php';

try {
    $usuario = new Usuario('galvao@galvao.eti.br');
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($usuario);

$usuario->excluir();
