<?php
require '../autoload.php';

use OOAlfa\Usuario;

try {
    $usuario        = new Usuario($_POST['email']);
    $usuario->senha = $_POST['senha'];

    echo Usuario::$logPath;
    echo Usuario::PATH;

    if ($usuario->autenticar() === TRUE) {
        echo 'Autenticado.';
    } else {
        Usuario::registrarLog('E-mail e/ou senha inválido(s).');
    }
} catch (Exception $e) {
    printf('%s não é válido. Exceção: %s', 
        $_POST['email'], 
        $e->getMessage()
    );
}


