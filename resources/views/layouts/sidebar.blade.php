<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <strong><a href="index3.html" class="brand-link" >
        <span class="brand-text font-weight-bold">Poliklinik Rumah Sehat</span>
    </a></strong>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('polyclinics.index') }}" class="nav-link">
                <i class="fa-regular fas fa-hospital"></i>
              <p>
                Poliklinik
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('doctors.index') }}" class="nav-link">
                <i class="fa-duotone fas fa-stethoscope"></i>
              <p>
                Dokter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('patients.index') }}" class="nav-link">
                <i class="fa-solid fas fa-hospital-user"></i>
              <p>
                Pasien
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>