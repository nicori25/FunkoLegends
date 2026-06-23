<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<main>

<section class="hero">

    <div class="hero-content">

        <span class="hero-tag">
            Tienda Oficial de Coleccionables
        </span>

        <h1>
            Coleccioná tus personajes favoritos
        </h1>

        <p>
            Encontrá Funkos exclusivos de anime,
            gaming, cómics y películas.
        </p>

        <a href="catalogo.php" class="btn-primary">
            Ver Catálogo
        </a>

    </div>

</section>
<section class="categorias">

    <h2>Categorías Destacadas</h2>

    <div class="categorias-grid">

        <div class="categoria-card">
            Anime
        </div>

        <div class="categoria-card">
            Marvel
        </div>

        <div class="categoria-card">
            DC
        </div>

        <div class="categoria-card">
            Gaming
        </div>

    </div>

</section>
<section class="destacados">

    <h2>Productos Destacados</h2>

    <div class="productos-grid">

        <article class="producto-card">

            <div class="producto-img">
                <img src="img/funko-goku.png" alt="Funko Goku">
            </div>

            <div class="producto-info">

                <h3>Funko Goku</h3>

                <p class="precio">$24.999</p>

                <a href="producto.php?id=1" class="btn-producto">
                    Ver Más
                </a>

            </div>

        </article>

        <article class="producto-card">

            <div class="producto-img">
                Imagen
            </div>

            <div class="producto-info">

                <h3>Funko Batman</h3>

                <p class="precio">$29.999</p>

                <a href="#" class="btn-producto">
                    Ver Más
                </a>

            </div>

        </article>

        <article class="producto-card">

            <div class="producto-img">
                Imagen
            </div>

            <div class="producto-info">

                <h3>Funko Naruto</h3>

                <p class="precio">$22.999</p>

                <a href="#" class="btn-producto">
                    Ver Más
                </a>

            </div>

        </article>

        <article class="producto-card">

            <div class="producto-img">
                Imagen
            </div>

            <div class="producto-info">

                <h3>Funko Iron Man</h3>

                <p class="precio">$34.999</p>

                <a href="#" class="btn-producto">
                    Ver Más
                </a>

            </div>

        </article>

    </div>

</section>
</main>

<?php include 'includes/footer.php'; ?>