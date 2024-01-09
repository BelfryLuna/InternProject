<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="<?= base_url(); ?>/dist/img/GCI2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Garuda CRM</span>
    </a>

    <!-- Sidebar -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link active">
              <p>
                Home
                <i class="nav-icon fas fa-home"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/keluhan') ?>" class="nav-link">
              <p>
                Pencatatan Keluhan
                <i class="nav-icon fas fa-calendar-check"></i>    
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>