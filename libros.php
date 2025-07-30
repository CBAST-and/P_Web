<?php
include 'includes/db.php';
include 'includes/header.php';

// Consultar libros
$sql = "SELECT t.id_titulo, t.titulo, t.precio, t.fecha_pub, p.nombre_pub
        FROM titulos t
        LEFT JOIN publicadores p ON t.id_pub = p.id_pub
        ORDER BY t.fecha_pub DESC";

$stmt = $pdo->query($sql);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="fw-bold">Libros Disponibles</h2>
        <p class="lead">Explora nuestra colección y encuentra el próximo libro que te cautivará.</p>
    </div>
</section>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <?php foreach ($libros as $libro): ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/ced4da/495057.jpg&text=Libro" alt="Portada de libro" />
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bolder"><?= htmlspecialchars($libro['titulo']) ?></h5>
                            <small class="text-muted"><?= htmlspecialchars($libro['nombre_pub']) ?> (<?= date('Y', strtotime($libro['fecha_pub'])) ?>)</small><br>
                            <span class="text-success fw-bold">$<?= number_format($libro['precio'], 2) ?></span>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0 text-center">
                            <a class="btn btn-outline-dark mt-auto" href="#">Ver más</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
