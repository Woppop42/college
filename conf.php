<?php
// Configuration des constantes de connexion à la base de données.
define("DB_NAME", "collège");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_HOST", "localhost");

$pdo = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
?>