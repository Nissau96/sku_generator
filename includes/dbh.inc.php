<?php 

$dsn = "mysql:host=localhost;dbname=sku_generator";
$dbusername= "root";
$dbpassord = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassord);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}