<?php

class Database
{
    public static function getConnection(): PDO
    {
        $dsn = 'sqlite:' . __DIR__ . '/../data/database.sqlite';

        $pdo = new PDO($dsn);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
