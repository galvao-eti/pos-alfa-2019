<?php declare(strict_types = 1);
namespace PosAlfa\Abstraction;

interface BancoDeDados
{
    public function connect(string $dsn, string $user, string $pass): \PDO;
    public function prepare(\PDO $dbh, string $sql): \PDOStatement;
}
