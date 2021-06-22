<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url() ?> " class="brand-link">
        <img src="<?php echo media(); ?>images/logo.jpg"  class="brand-image "
            style="opacity: .8">
        <span class="brand-text ">Kcrm</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              

                <li class="nav-item">
                    <a href="<?= base_url() ?> " class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p> Registrar <i class="fas fa-angle-left right"></i> </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>productos/crearproductos" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>categorias/crearcategoria" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-folder-open"></i>
                        <p> Consultar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                    </ul>
                   
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>