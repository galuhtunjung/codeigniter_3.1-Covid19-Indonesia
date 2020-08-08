
  <aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <?php $this->load->view('templates/brand-logo'); ?>
  </aside>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php $this->load->view('templates/brand-logo'); ?>
      
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php $this->load->view('templates/sidebar-user-panel'); ?>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
         <li class="nav-item">
          <a href="<?= site_url('portal') ?>" class="nav-link" id="activity_plan">
            <i class="fas fa-tachometer-alt nav-icon"></i>
            <p>Home</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= site_url('portal') ?>" class="nav-link">
            <i class="fas fa-info-circle nav-icon"></i>
            <p>About Us</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= site_url('tampildonasi') ?>" class="nav-link">
            <i class="fas fa-money-bill nav-icon"></i>
            <p>Donasi</p>
          </a>
        </li>
 
      
      </ul>
    </li>
  </nav>
  <!-- /.sidebar-menu -->






</div>
<!-- /.sidebar -->
</aside>

