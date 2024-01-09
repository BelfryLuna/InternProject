<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="<?= base_url(); ?>/dist/img/GCI2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Garuda CRM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/<?= user()->poto; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= user()->username; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/keluhan') ?>" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                Keluhan
    
              </p>
            </a>
          </li>
          <?php if( in_groups('admin')) : ?> 
          <li class="nav-item">
            <a href="<?= base_url('/trek') ?>" class="nav-link">
            <i class="nav-icon fas fa-paper-plane"></i>
              <p>
                Tracking 
              </p>
            </a>
          </li>
          <?php endif; ?>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>