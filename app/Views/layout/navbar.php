<nav class="navbar navbar-fixed-top" id="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="sr-only">
                    Toggle navigation
                </span>
                <i class="fa fa-bars fa-2x">
                </i>
            </button>
            <a class="navbar-brand" href="<?=route_to('inicio')?>">
                <h1 id="logo" style="margin-left: 8px; padding: 3px;">
                    <img alt="Brandi" src="assets/img/logoFull.png" width="210">
                    </img>
                </h1>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="">
            <ul class="nav navbar-nav navbar-right">
                <li class="current">
                    <a href="<?=route_to('inicio')?>">
                        Inicio
                    </a>
                </li>
                <li class="dropdown" id="drop">
                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        Servicios
                        <span class="caret">
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?=route_to('web')?>">
                                Diseño y Desarrollo Web
                            </a>
                        </li>
                        <li>
                            <a href="<?=route_to('software')?>">
                                Desarrollo de Software
                            </a>
                        </li>
                        <li>
                            <a href="<?=route_to('movil')?>">
                                Aplicaciones Móviles
                            </a>
                        </li>
                        <li>
                            <a href="<?=route_to('marketing')?>">
                                Marketing Digital
                            </a>
                        </li>
                        <li>
                            <a href="<?=route_to('social')?>">
                                Social Media
                            </a>
                        </li>
                        <li>
                            <a href="<?=route_to('mantenimiento')?>">
                                Mantenimiento
                            </a>
                        </li>
                    </ul>
                    <li>
                        <a href="<?=route_to('inicio')?>">
                            Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="<?=route_to('inicio')?>">
                            Equipo
                        </a>
                    </li>
                    <li>
                        <a href="<?=route_to('inicio')?>">
                            Contacto
                        </a>
                    </li>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
