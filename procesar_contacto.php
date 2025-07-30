<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO contacto (nombre, correo, asunto, comentario) 
            VALUES (:nombre, :correo, :asunto, :comentario)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nombre' => $nombre,
        ':correo' => $correo,
        ':asunto' => $asunto,
        ':comentario' => $comentario
    ]);

    // Redirigir o mostrar mensaje
    echo "<script>alert('Mensaje enviado correctamente'); window.location.href='contacto.php';</script>";
}
?>
