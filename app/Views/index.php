<?=$this->extend('layout/main')?>

<?php $this->section('content')?>
<?=$this->include('layout/slider')?>
<section class="servicios" id="servicios">
    <div class="container">
        <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
            <h2>
                Nos especializamos en dar soluciones
            </h2>
            <br>
                <h3>
                    Diseñamos páginas web exitosas, con el mejor diseño para ti y tu marca.
                </h3>
            </br>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp servicios1" data-wow-delay="0.6s">
                <i class="icon-desktop medium-icon" style="">
                </i>
                <h3>
                    Desarrollo de Software
                </h3>
                <hr>
                    <p class="nosotros">
                        Desarrollamos sistemas a la medida para las necesidades específicas de tu empresa o negocio.
                    </p>
                    <a class="btn btn-default btn-servicios" href="<?=route_to('software')?>">
                        Leer más...
                    </a>
                </hr>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp servicios1" data-wow-delay="0.9s">
                <i class="icon-browser medium-icon">
                </i>
                <h3>
                    Diseño Web
                </h3>
                <hr>
                    <p class="nosotros">
                        Diseñamos sitios web pensando en el usuario final, interactivos y con diseño responsivo, el cual se ajusta
                a dispositivos móviles.
                    </p>
                    <a class="btn btn-default btn-servicios" href="<?=route_to('web')?>">
                        Leer más...
                    </a>
                </hr>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp servicios1" data-wow-delay="1.2s">
                <i class="icon-megaphone medium-icon">
                </i>
                <h3>
                    Marketing Digital
                </h3>
                <hr>
                    <p class="nosotros">
                        Te hacemos dar a conocer mediante marketing digital, usando el manejo de redes sociales mas usadas hoy
                en día así como anuncios en uno de los motores de búsqueda mas utilizados (Google).
                    </p>
                    <a class="btn btn-default btn-servicios" href="<?=route_to('marketing')?>">
                        Leer más...
                    </a>
                </hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp servicios1" data-wow-delay="1.6s">
                <i class="icon-mobile medium-icon">
                </i>
                <h3>
                    Aplicaciones Móviles
                </h3>
                <hr>
                    <p class="nosotros">
                        Tus servicios y/o productos a la mano de todos. Diseñamos aplicaciones móviles para tu empresa o negocio.
                    </p>
                    <a class="btn btn-default btn-servicios" href="<?=route_to('movil')?>">
                        Leer más...
                    </a>
                </hr>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp servicios1" data-wow-delay="1.8s">
                <i class="icon-gears medium-icon">
                </i>
                <h3>
                    Mantenimiento
                </h3>
                <hr>
                    <p class="nosotros">
                        Deja el trabajo en nuestras manos, nosotros nos encargamos de actualizar tu pagina web, redes sociales,
                entre otras cosas mas.
                    </p>
                    <a class="btn btn-default btn-servicios" href="<?=route_to('mantenimiento')?>">
                        Leer más...
                    </a>
                </hr>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp servicios1" data-wow-delay="2.2s">
                <i class="icon-facebook medium-icon">
                </i>
                <h3>
                    Social Media
                </h3>
                <hr>
                    <p class="nosotros">
                        Nosotros nos encargamos de tus redes sociales como Facebook, Twitter, Instagram.
                    </p>
                    <a class="btn btn-default btn-servicios" href="<?=route_to('social')?>">
                        Leer más...
                    </a>
                </hr>
            </div>
        </div>
    </div>
</section>
<section class="leyenda" id="">
    <div class="parallax-overlay">
        <div class="container">
            <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                <h2 id="deja">
                    Deje la imagen de su sitio en nuestras manos.
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center wow bounceInLeft animated" data-wow-duration="1300ms">
                    <p class="nosotros">
                        Nuestros diseños web están pensados en siempre ayudar a nuestros clientes a vender su producto o
                    servicio, ofreciendo una imagen profesional de su negocio con un sitio web de alto impacto.
                    </p>
                    <br>
                        <p class="nosotros">
                            El diseño de una página web representa la identidad de una empresa y se alinea a su imagen corporativa.
                            <br>
                                <br>
                                    Una página web es una herramienta esencial en constante crecimiento. Nos enfocamos en desarrollar
                    un diseño web profesional al mismo tiempo garantizar que los visitantes a tú página web se conviertan
                    en nuevos clientes potenciales.
                                </br>
                            </br>
                        </p>
                    </br>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm wow bounceInLeft animated" data-wow-duration="1300ms">
                    <img alt="" class="imgser" src="assets/img/page.png">
                    </img>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="publicidad1" id="publicidad1">
    <div class="container">
        <div class="sec-title text-center mb50 wow bounceInUp animated" data-wow-duration="1000ms">
            <h2>
                ¿Quieres hacer crecer tu negocio ahora mismo?
            </h2>
            <p class="lead">
                Conoce nuestros paquetes, promociones o solicita una cotización de acuerdo a tu presupuesto y necesidades.
            </p>
            <img alt="website" class="imgpublicidad hidden-xs hidden-sm" src="assets/img/websites.jpg">
            </img>
        </div>
        <div class="text-center">
            <h3 class="grande">
                Haz crecer tu negocio ya!
            </h3>
        </div>
    </div>
</section>
<a class="text-center" href="diseno-web.html#price">
    <button class="paquetes nosotro">
        <i aria-hidden="true" class="fa fa-archive">
        </i>
        Vea nuestros paquetes.
    </button>
</a>
<div data-vide-bg="mp4:assets/img/videos/video, poster:assets/img/videos/video" data-vide-options="loop: true, muted: false, position: 0% 50%" id="nosotros">
    <br>
        <div class="container text-center">
            <div class="blanco sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms" style="margin-bottom: 0">
                <h2 id="nosortostext">
                    Nosotros
                </h2>
                <h3>
                    Soluciones innovadoras para tu negocio.
                </h3>
            </div>
            <p class="blanco text-center nosotros wow bounceInLeft animated">
                Somos una empresa dedicada a brindar soluciones tecnológicas que permiten optimizar procesos de la vida cotidiana,
        contamos con la capacidad y el personal necesario para el desarrollo de software, diseño de paginas web,
        marketing digital entre otras más.
                <br>
                    <br class="hidden-ms hidden-xs">
                        Somos un equipo de apasionado por el desarrollo de software.
                    </br>
                </br>
            </p>
            <div class="hidden-ms hidden-xs wow bounceInRight animated mt30">
                <img alt="" class="" src="assets/img/logoA.png">
                </img>
            </div>
        </div>
    </br>
</div>
<section>
    <div class="container text-center">
        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1500ms" style="margin-bottom: 5px;">
            <h2>
                ¿POR QUÉ GDSOFT?
            </h2>
        </div>
        <p class="nosotros wow bounceInLeft animated mb50">
            Somos un equipo multidisciplinario: contamos con áreas de desarrollo, soporte técnico, diseño, marketing. Todas
        las áreas trabajan en equipo para lograr mejores resultados y generar proyectos con un toque de lo mejor
        de cada talento.
        </p>
        <div class="row">
            <div class="col-md-4 col-lg-4 mb50 wow bounceInLeft animated" data-wow-delay="500ms">
                <img alt="" src="assets/img/icon_design.png">
                    <h3>
                        El diseño importa.
                    </h3>
                    <p class="text-justify nosotros">
                        Creemos que los sistemas, ademas de funcionar correctamente, deben ser visualmente atractivos, interactivos
                pero sobre todo, fáciles de usar.
                    </p>
                </img>
            </div>
            <div class="col-md-4 col-lg-4 mb50 wow bounceInLeft animated" data-wow-delay="900ms">
                <img alt="" src="assets/img/icon_futuro.png">
                    <h3>
                        Pensamos a futuro
                    </h3>
                    <p class="text-justify nosotros">
                        Cada vez que diseñamos y desarrollamos un nuevo sistemas nos esforzamos por planificarlo correctamente,
                y así evitar cualquier tipo de errores a futuro.
                    </p>
                </img>
            </div>
            <div class="col-md-4 col-lg-4 wow bounceInLeft animated" data-wow-delay="1300ms">
                <img alt="" src="assets/img/icon_atencion2.png">
                    <h3>
                        Atención personalizada
                    </h3>
                    <p class="text-justify nosotros">
                        Nuestra prioridad siempre sera la calidad de nuestros sistemas es por ello que para lograrlo te damos
                la atención que requiere para poder comprender mejor la solución esperada.
                    </p>
                </img>
            </div>
        </div>
    </div>
</section>
<section id="equipo">
    <div class="">
        <div class="container">
            <div class="sec-title text-center wow rubberBand animated mb50" data-wow-duration="2000ms">
                <h2>
                    Nuestro equipo de trabajo
                </h2>
            </div>
            <figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                <div class="member-thumb">
                    <img alt="Team Member" class="img-responsive" src="assets/img/team/diego.jpg">
                        <figcaption class="overlay">
                            <h5>
                                Ing. en Software
                            </h5>
                            <h6>
                                Diego Enrique Sanchez Ordoñez
                            </h6>
                            <!-- <p>Programador Web Back-End - Front-End</p>
                    <p>Programador Java</p>
                    <p>Programador Visual Basic - C#</p> -->
                            <!-- <p>Programador Web Back-End - Front-End</p> -->
                            <ul class="social-links text-center">
                                <!-- <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li> -->
                                <li>
                                    <a href="https://www.facebook.com/diego.enriqueSO" target="_banck">
                                        <i class="fa fa-facebook fa-lg">
                                        </i>
                                    </a>
                                </li>
                                <!-- <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li> -->
                            </ul>
                        </figcaption>
                    </img>
                </div>
                <h4>
                    Diego Enrique Sánchez Ordoñez
                </h4>
                <span>
                    Co-Fundador
                </span>
            </figure>
            <!-- end single member -->
            <!-- single member -->
            <figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="500ms">
                <div class="member-thumb">
                    <img alt="Team Member" class="img-responsive" src="assets/img/team/emanuel.png">
                        <figcaption class="overlay">
                            <h5>
                                Ing. en Software
                            </h5>
                            <h6>
                                Emanuel Campos Jasso
                            </h6>
                            <!-- <p>sit aspernatur aut odit aut fugit,</p> -->
                            <ul class="social-links text-center">
                                <!-- <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li> -->
                                <li>
                                    <a href="https://www.facebook.com/emanuel.camposjasso" target="_banck">
                                        <i class="fa fa-facebook fa-lg">
                                        </i>
                                    </a>
                                </li>
                                <!-- <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li> -->
                            </ul>
                        </figcaption>
                    </img>
                </div>
                <h4>
                    Emanuel Campos Jasso
                </h4>
                <span>
                    Co-Fundador
                </span>
            </figure>
            <!-- end single member -->
            <!-- single member -->
            <figure class="team-member col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="500ms">
                <div class="member-thumb">
                    <img alt="Team Member" class="img-responsive" src="assets/img/team/alejandro.png">
                        <figcaption class="overlay">
                            <h5>
                                Ing. en Software
                            </h5>
                            <h6>
                                Alejandro Azael Trujillo Serrano
                            </h6>
                            <!-- <p>sit aspernatur aut odit aut fugit,</p> -->
                            <ul class="social-links text-center">
                                <!-- <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li> -->
                                <li>
                                    <a href="https://www.facebook.com/azael.trujilloserrano" target="_banck">
                                        <i class="fa fa-facebook fa-lg">
                                        </i>
                                    </a>
                                </li>
                                <!-- <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li> -->
                            </ul>
                        </figcaption>
                    </img>
                </div>
                <h4>
                    Alejandro Azael Trujillo Serrano
                </h4>
                <span>
                    Diseñador Grafico
                </span>
            </figure>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <div class="parallax-overlay">
        <div class="container">
            <div class="row mb50">
                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2>
                        Contactanos
                    </h2>
                </div>
                <div class="lead text-center wow fadeInLeft animated mb50" data-wow-duration="1000ms" style="color: #fff">
                    <p>
                        Ponemos a tu disposición nuestro formulario de contacto, teléfono y correo electrónico para que te
                    comuniques con nosotros para cualquier duda o cotización.
                    </p>
                </div>
                <!-- contact address -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms" style="color: #fff">
                    <div class="contact-address telefono">
                        <h3>
                            Telefonos:
                        </h3>
                        <p>
                            Diego Enrique Sanchez Ordoñez
                        </p>
                        <p>
                            <span>
                                044 7131150285
                            </span>
                        </p>
                        <br>
                            <p>
                                Emanuel Campos Jasso
                            </p>
                            <p>
                                <span>
                                    044 7223382744
                                </span>
                            </p>
                            <br>
                                <h3>
                                    Correo Electronico:
                                </h3>
                                <p style="font-size: 22px;">
                                    contacto@gdsoft.com.mx
                                </p>
                            </br>
                        </br>
                    </div>
                </div>
                <!-- end contact address -->
                <!-- contact form -->
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-delay="300ms" data-wow-duration="500ms" id="contactanos">
                    <div class="contact-form">
                        <h3>
                            ¿En qué podemos ayudarle?
                        </h3>
                        <form action="enviar.php" id="contact-form">
                            <div class="input-group name-email">
                                <div class="input-field">
                                    <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text">
                                    </input>
                                </div>
                                <div class="input-field">
                                    <input class="form-control" id="correo" name="correo" placeholder="Correo" type="email">
                                    </input>
                                </div>
                            </div>
                            <div class="input-group">
                                <input class="form-control" id="asunto" name="asunto" placeholder="Asunto"/>
                            </div>
                            <div class="input-group">
                                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje">
                                </textarea>
                            </div>
                            <div class="input-group">
                                <input class="pull-right btn btn-default envio" id="enviar" type="submit" value="Enviar">
                                </input>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end contact form -->
                <!-- footer social links -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-delay="600ms" data-wow-duration="500ms" style="color: #fff;">
                    <h3>
                        Redes sociales:
                    </h3>
                    <ul class="footer-social">
                        <li>
                            <a href="https://www.facebook.com/somosGDSoft/" target="_banck">
                                <i class="fa fa-facebook fa-2x">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end footer social links -->
            </div>
        </div>
        <div class="text-center">
            <div class="fb-like" data-action="like" data-href="https://www.facebook.com/somosGDSoft/" data-layout="button_count" data-share="true" data-show-faces="true" data-size="large">
            </div>
        </div>
    </div>
</section>

<?php $this->endsection('content')?>
