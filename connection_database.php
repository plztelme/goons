<?php
require 'database_config.php';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname" , $username , $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
catch(Exception $e) {
    die("Database connection failed : " . $e->getMessage());
}
?>
