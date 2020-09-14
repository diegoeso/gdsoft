<?php $this->extend('layout/main')?>
<?php $this->section('content')?>
    <section id="bannerheader" class="item" style="background-image: url(assets/img/carrusel/socialmedia.jpg);">
        <div class="carousel-caption">
            <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Social
                <span> Media</span>
            </h2>
            <!-- <h3 data-wow-duration="500ms" class="wow slideInLeft animated">
                <span class="color">/creative</span> one page template.</h3> -->
            <p data-wow-duration="500ms" class="wow bounceInUp animated">Administramos tus redes sociales para poder llegar a más personas</p>
        </div>
    </section>

    <section id="redes">
        <div class="container">
            <div class="sec-title text-center mb30 wow rubberBand animated" data-wow-duration="500ms">
                <h2>Redes Sociales</h2>
                <p class="lead">Cada vez más gente utiliza redes sociales y nuestro objetivo es que esa gente esté enterada de tu negocio,
                    que puedan interactuar para que sepan que tu negocio existe y siempre lo tengan en mente.</p>
            </div>

            <div class="row">
                <div class="col-md-6 text-right">
                    <div class="mb10 facebook delay">
                        <p class="lead" style="padding: 0; margin:0;">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <strong>Facebook</strong>
                        </p>
                        <p class="nosotros">Creamos tu fanpage de tu empresa o negocio para poder estar en una de las redes sociales más usadas
                            hoy en dia y que la gente conozca tu empresa o negocio asi como tus servicios y/o productos.</p>
                    </div>
                    <div class="mb10 twitter delay">
                        <p class="lead" style="padding: 0; margin:0;">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <strong>Twitter</strong>
                        </p>
                        <p class="nosotros">Creamos el perfil de tu empresa o negocio, realizamos campañas plubicitarias para dar a conocer tus
                            servicios y/o productos.</p>
                    </div>
                    <div class="mb10 youtube delay">
                        <p class="lead" style="padding: 0; margin:0;">
                            <i class="fa fa-youtube" aria-hidden="true"></i>.
                            <strong>YouTube</strong>
                        </p>
                        <p class="nosotros">Creamos tu canal de
                            <strong>YouTube</strong> para que tus clientes puedan ver tus servicios y/o productos, el proceso que
                            lleva realizar dicha tarea.</p>
                    </div>
                    <div class="mb10 pinterest delay">
                        <p class="lead" style="padding: 0; margin:0;">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                            <strong>Punterest</strong>
                        </p>
                        <p class="nosotros">Creamos tu perfil en
                            <strong>Pinterest</strong> para que tus clientes vean imagenes sorprendentes de tus servicios y/o productos,
                            creando una coleccion de imagenes representando tu marca.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center img-redes">
                    <img src="assets/img/social-media.jpg" alt="" class="img-thumbnail">
                </div>
            </div>
        </div>
    </section>
    <a href="index.html#contactanos" class="text-center">
        <button class="paquetes"> Solicitar Cotización.</button>
    </a>
<?php $this->endsection('content')?>