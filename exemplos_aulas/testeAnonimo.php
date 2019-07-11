<?php
require '../autoload.php';

/*$obj = new class(42) {
    public $attr;

    public function __construct($x)
    {
        $this->attr = $x;
    }

    public function __destruct()
    {
        OOAlfa\Usuario::registrarLog('abc');

    }
};*/

$u = new OOAlfa\Usuario('galvao@php.net');

$s = serialize($u);

$obj = unserialize($s, ['allowed_classes' => ['OOAlfa\Usuario', 'OOAlfa\Admin']]);

var_dump($obj);













