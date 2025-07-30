<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container px-4 px-lg-5">
        <h2 class="fw-bolder mb-4 text-center">Autores</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            try {
                $stmt = $pdo->query("SELECT * FROM autores");
                $autores = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($autores) > 0) {
                    foreach ($autores as $autor) {
                        echo '<div class="col">';
                        echo '<div class="card h-100">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . htmlspecialchars($autor['nombre']) . ' ' . htmlspecialchars($autor['apellido']) . '</h5>';
                        echo '<p class="card-text"><strong>Teléfono:</strong> ' . htmlspecialchars($autor['telefono']) . '</p>';
                        echo '<p class="card-text"><strong>Dirección:</strong> ' . htmlspecialchars($autor['direccion']) . ', ' . htmlspecialchars($autor['ciudad']) . ', ' . htmlspecialchars($autor['estado']) . ', ' . htmlspecialchars($autor['pais']) . ' - ' . htmlspecialchars($autor['cod_postal']) . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p class="text-center">No hay autores disponibles.</p>';
                }
            } catch (PDOException $e) {
                echo '<p class="text-danger text-center">Error al cargar autores: ' . $e->getMessage() . '</p>';
            }
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
