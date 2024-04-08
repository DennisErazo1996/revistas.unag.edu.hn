<?php include_once ('header.php'); ?>

<div id="loading">
    <div class="fulfilling-square-spinner">
        <div class="spinner-inner"></div>
    </div>
</div>
<main>
    <section id="slider">
        <img id="hoja1" class="parallax" data-rellax-speed="7" data-rellax-xs-speed="3" data-rellax-mobile-speed="5"
            data-rellax-tablet-speed="-8" data-rellax-desktop-speed="7" src="../assets/images/hoja-cayendo-unag.png"
            alt="revista-ciencias-agroambientales">
        <img id="hoja2" class="parallax" data-rellax-speed="7" data-rellax-xs-speed="3" data-rellax-mobile-speed="5"
            data-rellax-tablet-speed="-8" data-rellax-desktop-speed="7" src="../assets/images/hoja-cayendo-unag.png"
            alt="revista-ciencias-agroambientales">
        <img id="hoja3" class="parallax" data-rellax-speed="7" data-rellax-xs-speed="3" data-rellax-mobile-speed="5"
            data-rellax-tablet-speed="-8" data-rellax-desktop-speed="7" src="../assets/images/hoja-cayendo-unag.png"
            alt="revista-ciencias-agroambientales">
        <div class="slider rellax uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
            uk-slideshow="animation: push; autoplay: true; ratio: false;">

            <ul class="uk-slideshow-items" data-uk-height-viewport="offset-top: true; offset-bottom: 40">
                <li>
                    <img src="../assets/images/bg-03.jpg" alt="" uk-cover>
                    <div class="overlay"></div>
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <h2 class="titulo-descripcion-slider" uk-slideshow-parallax="x: 100,-100">Misión</h2>
                        <p class="descripcion-slider" uk-slideshow-parallax="x: 200,-200">La misión de La revista
                            Ciencias AgroAmbientales es la divulgación del conocimiento reflexivo y crítico de la
                            investigación, que contribuyan a una mejor comprensión y valoración pública de la ciencia y
                            al desarrollo e innovación científica y tecnológica.</p>
                    </div>
                </li>
                <li>
                    <img src="../assets/images/bg-02.jpg" alt="" uk-cover>
                    <div class="overlay"></div>
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <h2 class="titulo-descripcion-slider" uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Visión
                        </h2>
                        <p class="descripcion-slider" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Ser una revista
                            reconocida por la calidad e innovación de sus contenidos de referencia a nivel nacional e
                            internacional.</p>
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous
                uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
                uk-slideshow-item="next"></a>

        </div>
    </section>

    <section class="uk-container uk-container-medium uk-padding uk-margin-top">
        <div class="uk-child-width-expand@s" uk-grid>
            <div>
                <h3 class="titulo">Categorías de Trabajos </h3>
                <p>
                    La Revista Ciencias AgroAmbientales acepta trabajos de investigación que sean de interés para la
                    comunidad científica y que contribuyan al desarrollo en las áreas del conocimiento, asume cinco
                    categorías de trabajos científicos:
                <ul class="uk-list uk-list-disc uk-list-primary">
                    <li>Artículo de investigación científica </li>
                    <li>Artículo de revisión</li>
                    <li>Ensayos</li>
                    <li>Estudios de caso</li>
                    <li>Editoriales y cartas al editor</li>
                </ul>
                </p>
            </div>
            <div class=" uk-background-fixed uk-background-center-center uk-height-large@s uk-width-expand@s"
                style="background-image: url(../assets/images/bg-04.jpg);"></div>

        </div>
        <h3 class="uk-heading-line uk-text-center uk-margin-large-top titulo"><span>Ejes Temáticos</span></h3>
        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-margin-medium-top" uk-grid>
            <div>
                <div class=" uk-padding">
                    <img class="icono-eje" src="../assets/images/suelo.png" alt="ciencias-agroambientales-suelos">
                    <p>Gestión del Suelo</p>
                </div>
            </div>
            <div>
                <div class="uk-padding">
                    <img class="icono-eje" src="../assets/images/agroecologia.png"
                        alt="ciencias-agroambientales-suelos">
                    <p>Agroecología y Desarrollo Rural</p>
                </div>
            </div>
            <div>
                <div class="uk-padding">
                    <img class="icono-eje" src="../assets/images/recurso-hidrico.png"
                        alt="ciencias-agroambientales-suelos">
                    <p>Gestión del Recurso Hídrico y climatología</p>
                </div>
            </div>
            <div>
                <div class="uk-padding">
                    <img class="icono-eje" src="../assets/images/bosque.png" alt="ciencias-agroambientales-suelos">
                    <p>Bosques y Biodiversidad</p>
                </div>
            </div>
        </div>
    </section>

    <section id="equipo-section" class="uk-padding-large">
        <h3 class="uk-heading-line uk-text-center titulo uk-margin-bottom"><span>Equipo Editorial</span></h3>
        <div class="uk-flex uk-flex-center uk-margin-medium-top">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-1-2@s">
                    <div class="uk-card uk-card-default uk-card-body uk-padding-small">
                        <img class="icono-equipo uk-margin-small-top uk-margin-small-top"
                            src="../assets/images/usuario.png" alt="">
                        <div class="uk-width-expand">
                            <p class="uk-margin-remove-bottom">Oscar Ferreira</p>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">M. Sc.</time>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-card uk-card-default uk-card-body uk-padding-small">
                        <img class="icono-equipo uk-margin-small-top" src="../assets/images/usuario.png" alt="">
                        <div class="uk-width-expand">
                            <p class="uk-margin-remove-bottom">Jorge Cardona</p>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">M. Sc.</time>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-card uk-card-default uk-card-body uk-padding-small">
                        <img class="icono-equipo uk-margin-small-top" src="../assets/images/usuario.png" alt="">
                        <div class="uk-width-expand">
                            <p class="uk-margin-remove-bottom">Wendy Castellanos</p>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">M. Sc.</time>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-card uk-card-default uk-card-body uk-padding-small">
                        <img class="icono-equipo uk-margin-small-top" src="../assets/images/usuario.png" alt="">
                        <div class="uk-width-expand">
                            <p class="uk-margin-remove-bottom">Carlos Irias</p>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">M. Sc.</time>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

    </section>








    <?php include_once ('footer.php'); ?>