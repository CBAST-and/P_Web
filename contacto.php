<?php include 'includes/header.php'; ?>

<header class="bg-dark py-5">
    <div class="container text-center text-white">
        <h1 class="display-4">Contáctanos</h1>
        <p class="lead">Envíanos tus dudas, comentarios o sugerencias</p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <form action="procesar_contacto.php" method="POST" class="row g-3">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="col-md-6">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" required>
            </div>
            <div class="col-12">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" name="asunto" required>
            </div>
            <div class="col-12">
                <label for="comentario" class="form-label">Comentario</label>
                <textarea class="form-control" name="comentario" rows="4" required></textarea>
            </div>
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
