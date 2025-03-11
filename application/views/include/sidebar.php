<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo site_url('admin/dashboard') ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('admin/categories') ?>" class="nav-link">
                <i class="nav-icon fas fa-layer-group"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('admin/brands') ?>" class="nav-link">
                <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Brands
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('admin/products') ?>" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                    <p>
                        Products
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('admin/orders') ?>" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>
                        Orders
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('admin/reports') ?>" class="nav-link">
                <i class="nav-icon fas fa-flag"></i>
                    <p>
                        Reports
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-wrench"></i>
                <p>
                    Settings
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo site_url('admin/profile-settings') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profile Setting</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('admin/currency-settings') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Currency Setting</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('admin/products-image-settings') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product Image Setting</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('admin/footer-settings') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Footer Setting</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">APC Module</li>
            <li class="nav-item">
                <a href="<?php echo site_url('admin/update-apc') ?>" class="nav-link">
                <i class="nav-icon far fa-edit"></i>
                <p>
                    Update APC
                </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>