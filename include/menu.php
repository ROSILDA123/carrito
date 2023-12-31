 <!-- INICIO MENU -->

 <header id="page-topbar"> 
        <div class="navbar-header">
        <div class="d-flex align-items-left">
        <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>
            <div class="d-flex align-items-center">
                <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn header-item waves-effect" 
                id="page-header-user-dropdown" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">
                   Usuario
                   <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        Mi perfil
                    </a> 
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        Cerrar sesion
                    </a>     
                </div>
              </div>
            </div>
        </div>
     </header>

     <div class="vertical-menu">

        <div data-simplebar class="h-100">
            <div class="navbar-brand-box">
                 <a href="" class="logo">
                    <!-- va el logo, puede ser imagen o texto-->
                    <!--<img src="" alt="">-->
                    ROSI
                 </a>
            </div>
            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">MENU</li>
                    <li>
                        <a href="" class="waves-effect"><i class="feather-home"></i>Inicio</a>
                    </li>
                    <li>
                        <a href="ventas.php" class="waves-effect"><i class="fas fa-cart-arrow-down"></i>Ventas</a>
                    </li>
                    <li>
                        <a href="productos.php" class="waves-effect"><i class="feather-shopping-bag"></i>Productos</a>
                    </li>
                    <li>
                        <a href="formulario.php" class="waves-effect"><i class="dripicons-user"></i>Usuario</a>
                    </li>
                    <li>
                        <a href="pedidos.php" class="waves-effect"><i class="dripicons-to-do"></i>Pedidos</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fas fa-long-arrow-alt-down"></i>Devoluciones</a>
                    </li>
                    <li>
                        <a href="clientes.php" class="waves-effect"><i class="dripicons-user-group"></i>Clientes</a>
                    </li>
                    <li>
                        <a href="reportes.php" class="waves-effect"><i class="dripicons-user-id"></i>Reportes</a>
                    </li>
                    <li>
                        <a href="proveedores.php" class="waves-effect"><i class="fas fa-hotel"></i>Proveedores</a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-tools"></i>Mantenimiento</a>
                        <ul>
                        <li><a href="sistema.php">Sistema</a></li>
                        <li><a href="roles.php">Roles</a></li>
                        <li><a href="datos_empresa.php">Datos_empresa</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
     </div>

    <!-- FIN MENU -->