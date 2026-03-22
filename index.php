<?php
    require_once 'clases/conexion.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vignes et Vins - Inicio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--barra de navegacion-->
        <header>
            <img class="logo" src="assets/img/logo.png" alt="" srcset="">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <span></span>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <span><a class="nav-link active" aria-current="page" href="index.html">Inicio</a></span>
                            <span><a class="nav-link" href="#">Nosotros</a></span>
                            <span><a class="nav-link" href="experiencias.html">Experiencias</a></span>
                            <span><a class="nav-link" href="#">Favoritos</a></span>
                            <span></span>
                            <span><a class="nav-link" href="login.html">Registrate</a></span>
                            <?php include '../clases/login.php'?>
                            <span><a class="nav-link" href="#">Carro de compra</a></span>
                        </div>
                    </div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                    </div>
                </div>
            </nav>
        </header>
        <!--carruseles principales-->
        <div class="container-carrusel">
            <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/img/carrusel_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Nuestras viñedos</h4>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/carrusel_2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Vinos premiados de selección</h4>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/carrusel_3.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Compra de reservas</h4>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
            <!--contenido principal historia-->
            <main>
                <div class="container">
                    <h2 class="margin-bottom margin-top">Un recorrido por nuestra historia</h2>
                    <div>
                        <div class="card mb-3" style="max-width: 1250px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="assets/img/historia.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="margin-bottom">Tradicion Familiar</h5>
                                <p class="card-text">La familia Sánchez de Loria desciende de Don José Teodoro Sánchez de Loria quien llega a Chile el año 1785 nombrado por el Rey de España para ejercer el cargo de Oidor de la Real Audiencia.

                                Enrique Sánchez Faulkner (nieto del Oidor)  fundó la viña en 1890 convencido de la gran calidad del Terroir del Valle del Aconcagua. Plantó parras de Cabernet Sauvignon, Sauvignon Blanc y Torontel, convirtiéndolas en una de las cepas más antiguas de Aconcagua y Chile.

                                Desde entonces la viña ha permanecido en la familia, quienes han sabido mantener los valores de originalidad, calidad y tradición de generación en generación, posicionando sus vinos en los más altos estándares de calidad, lo que agrada a los paladares mas exigentes.</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!--imagenes de mini galeria del viñedo-->
                <h2 class="margin-bottom margin-top">Galeria</h2>
                <div class="container-galeria">
                    <section>
                        <article class="item">
                            <figure>
                                <img src="assets/img/galeria_1.jpg" alt="">
                            </figure>
                        </article>
                    </section>
                    <section>
                        <article class="item">
                            <figure>
                                <img src="assets/img/galeria_2.jpg" alt="">
                            </figure>
                        </article>
                    </section>
                    <section>
                        <article class="item">
                            <figure>
                                <img src="assets/img/galeria_3.jpg" alt="">
                            </figure>
                        </article>
                    </section>
                </div>
                <div>
                    <h5>Nuestros Productos</h5>
                </div>
                <!--productos-->
                <section>
                    <article class="galeria2 margin-bottom">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col center">
                                <figcaption>
                                    <figure>
                                        <img src="assets/img/producto-1.jpg" alt="">
                                    </figure>
                                    <h6>Vino Rose</h6>
                                    <p>Aromatico vino de aperitivo con dulces notas de frambruesa</p>
                                    <button type="button" class="btn btn-primary"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .6rem; --bs-btn-font-size: .75rem;">
                                            Añadir al carro
                                    </button>
                                </figcaption>
                                </div>
                                <div class="col center">
                                <figcaption>
                                    <figure>
                                        <img src="assets/img/producto-3.jpg" alt="">
                                    </figure>
                                    <h6>Vino Merlot</h6>
                                    <p>Vino con cuerpo con notas con caracter en el paladar</p>
                                    <button type="button" class="btn btn-primary"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .6rem; --bs-btn-font-size: .75rem;">
                                            Añadir al carro
                                    </button>
                                </figcaption>
                                </div>
                                <div class="col center">
                                <figcaption>
                                    <figure>
                                        <img src="assets/img/producto-2.jpg" alt="">
                                    </figure>
                                    <h6>Vino Last Harvest</h6>
                                    <p>Dulce vino con notas suaves y aroma agradable</p>
                                    <button type="button" class="btn btn-primary"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .6rem; --bs-btn-font-size: .75rem;">
                                            Añadir al carro
                                    </button>
                                </figcaption>
                                </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
            </main>
            <!--pie de pagina y datos de contacto-->
            <footer>
            <div class="footer-container">
                <div class="footer-marca">
                    <h1>Vignes Et Vins</h1>
                    <p>Todo lo que necesitas de tu tienda</p>
                    <input type="email" value="Suscribete">
                </div>
                <div class="footer-col">
                    <ul>
                        <h4>Tienda</h4>
                        <li>Despachos</li>
                        <li>Formas de pago</li>
                        <li>Horarios</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                        <h4>Nosotros</h4>
                        <li>Compromiso</li>
                        <li>Contacto</li>
                        <li>Equipo</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                        <h4>Mucho más</h4>
                        <li>Ayuda</li>
                        <li>Garantias</li>
                        <li>Sucursales</li>
                    </ul>
                </div>
            </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>