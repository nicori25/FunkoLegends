<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="catalogo">

    <h1>Catálogo</h1>

  <aside class="filtros">

    <h3>Categorías</h3>

    <div class="filtros-categorias">

        <button class="filtro-btn">Anime</button>

        <button class="filtro-btn">Marvel</button>

        <button class="filtro-btn">DC</button>

        <button class="filtro-btn">Gaming</button>

    </div>

</aside>

    <div class="productos-grid">

        <?php for($i=1;$i<=8;$i++): ?>

            <article class="producto-card">

                <div class="producto-img">
                    Imagen
                </div>

                <div class="producto-info">

                    <h3>Funko Goku</h3>

                    <p class="precio">$24.999</p>

                    <a href="producto.php?id=1">
                        Ver Más
                    </a>

                </div>

            </article>

        <?php endfor; ?>

    </div>

</section>

<?php include 'includes/footer.php'; ?>