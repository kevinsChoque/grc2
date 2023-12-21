<nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li> -->
        <li class="nav-item border-right infraccionPmsNavbar">
            <a class="nav-link border-right" href="{{url('cotizacion/registrar')}}" title="Registrar infraccion">
                <i class="fas fa-plus d-none d-sm-inline-block"></i>
                <span class="description-text">COT</span>
            </a>
        </li>
        <li class="nav-item border-right infraccionPmsNavbar">
            <a class="nav-link border-right" href="{{url('postulaciones/ver')}}" title="Registrar infraccion">
                <i class="fas fa-plus d-none d-sm-inline-block"></i>
                <span class="description-text">POS</span>
            </a>
        </li>
        <!-- <li class="nav-item border-right">
            <a class="nav-link border-right" href="{{url('presentacion/consultar')}}" title="Consultar placa" target="_blank">
                <i class="fas fa-plus d-none d-sm-inline-block"></i>
                <span class="description-text">CST</span>
            </a>
        </li> -->
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <span class="font-weight-bold font-italic"><i class="fa fa-user-tie"></i>
            ({{
                Session::has('usuario')?
                    Session::get('usuario')->usuario:
                    '--';
            }})
            ({{
                Session::has('usuario')?
                    Session::get('usuario')->idUsu:
                    '--';
            }})
            {{
                Session::has('usuario')?
                    Session::get('usuario')->nombre.' '.Session::get('usuario')->apellidoPaterno.' '.Session::get('usuario')->apellidoMaterno:
                    '--';
            }}
            </span>
            <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button"><i class="fas fa-search"></i></a> -->
            <div class="navbar-search-block" style="display: none;">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit"><i class="fas fa-search"></i></button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</nav>
