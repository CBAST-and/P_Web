<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="fw-bold">Bienvenido a Librería Online</h2>
        <p class="lead">Explora nuestra colección de libros y descubre a los autores más destacados del mundo literario.</p>
    </div>
</section>

<section class="py-5">
    <div class="container px-4 px-lg-5">
        <h3 class="fw-bold mb-4">Libros Destacados</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            try {
                $stmt = $pdo->query("SELECT * FROM titulos LIMIT 6");
                $libros = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($libros) > 0) {
                    foreach ($libros as $libro) {
                        echo '<div class="col">';
                        echo '<div class="card h-100">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . htmlspecialchars($libro['titulo']) . '</h5>';
                        echo '<p class="card-text"><strong>Precio:</strong> $' . htmlspecialchars($libro['precio']) . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p class="text-center">No hay libros disponibles en este momento.</p>';
                }
            } catch (PDOException $e) {
                echo '<p class="text-danger">Error al cargar libros: ' . $e->getMessage() . '</p>';
            }
            ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
