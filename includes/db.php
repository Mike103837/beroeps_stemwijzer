<?php
declare(strict_types=1);
function db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) { return $pdo; }
    $configFile = dirname(__DIR__) . '/config/database.php';
    if (!is_file($configFile)) {
        throw new RuntimeException('Database niet ingesteld: kopieer config/database.example.php naar config/database.php.');
    }
    $config = require $configFile;
    $port = (int) ($config["port"] ?? 3306);
    $dsn = sprintf("mysql:host=%s;port=%d;dbname=%s;charset=%s", $config["host"], $port, $config["database"], $config["charset"] ?? "utf8mb4");
    $pdo = new PDO($dsn, $config['username'], $config['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    return $pdo;
}
