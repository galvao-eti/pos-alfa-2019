<?php
require __DIR__ . '/../src/Usuario.php';

$email  = $_POST['email'];
$senha  = $_POST['senha'];
$cSenha = $_POST['confirma_senha'];
    
if (strlen($senha) > 5 and $senha === $cSenha) {
    try {
        $usuario = new Usuario($email);
        $usuario->senha = $senha;
        $usuario->cadastrar();
    } catch (Exception $e) {
        // bla bla bla
    }
}

