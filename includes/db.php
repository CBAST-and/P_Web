<?php
$host = 'sql302.infinityfree.com';
$dbname = 'if0_39599516_db_libreria';
$user = 'if0_39599516';
$pass = 'cZFqQesMhuoeNF'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
