<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <!-- Profil Section -->
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="<?= base_url('purple-free/src/assets/images/faces/kantor.jpg') ?>" alt="profile" />
          <span class="login-status online"></span>
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">UP3 Banjarmasin</span>
          <span class="text-secondary text-small">PLN ULP Gambut</span>
        </div>
      </a>
    </li>

    <!-- Dashboard -->
    <li class="nav-item <?= service('uri')->getSegment(1) == 'dashboard-m' ? 'active' : '' ?>">
      <a class="nav-link" href="/dashboard-m">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <!-- Pasang Baru -->
    <li class="nav-item <?= in_array(service('uri')->getSegment(1), ['dashboard-pb-m', 'data-pelanggan-pb-m', 'tindak-lanjut-pb-m', 'selesai-pb-m','filter-tindak-lanjut-pb-m', 'filter-selesai-pb-m']) ? 'active' : '' ?>">
      <a class="nav-link <?= in_array(service('uri')->getSegment(1), ['dashboard-pb-m', 'data-pelanggan-pb-m', 'tindak-lanjut-pb-m', 'selesai-pb-m', 'filter-tindak-lanjut-pb-m', 'filter-selesai-pb-m']) ? '' : 'collapsed' ?>"
        data-bs-toggle="collapse" href="#ui-basic-1"
        aria-expanded="<?= in_array(service('uri')->getSegment(1), ['dashboard-pb-m', 'data-pelanggan-pb-m', 'tindak-lanjut-pb-m', 'selesai-pb-m', 'filter-tindak-lanjut-pb-m', 'filter-selesai-pb-m']) ? 'true' : 'false' ?>"
        aria-controls="ui-basic-1">
        <span class="menu-title">Pasang Baru</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-plus-circle menu-icon"></i>
      </a>
      <div class="collapse <?= in_array(service('uri')->getSegment(1), ['dashboard-pb-m', 'data-pelanggan-pb-m', 'tindak-lanjut-pb-m', 'selesai-pb-m', 'filter-tindak-lanjut-pb-m', 'filter-selesai-pb-m']) ? 'show' : '' ?>" id="ui-basic-1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'dashboard-pb-m' ? 'active' : '' ?>" href="/dashboard-pb-m">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'data-pelanggan-pb-m' ? 'active' : '' ?>" href="/data-pelanggan-pb-m">Data Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= in_array (service('uri')->getSegment(1), ['tindak-lanjut-pb-m', 'filter-tindak-lanjut-pb-m']) ? 'active' : '' ?>" href="/tindak-lanjut-pb-m">Tindak Lanjut</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= in_array (service('uri')->getSegment(1), ['selesai-pb-m', 'filter-selesai-pb-m']) ? 'active' : '' ?>" href="/selesai-pb-m">Selesai</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Perubahan Daya -->
    <li class="nav-item <?= in_array(service('uri')->getSegment(1), ['dashboard-pd-m', 'data-pelanggan-pd-m', 'tindak-lanjut-pd-m', 'selesai-pd-m']) ? 'active' : '' ?>">
      <a class="nav-link <?= in_array(service('uri')->getSegment(1), ['dashboard-pd-m', 'data-pelanggan-pd-m', 'tindak-lanjut-pd-m', 'selesai-pd-m']) ? '' : 'collapsed' ?>"
        data-bs-toggle="collapse" href="#ui-basic-2"
        aria-expanded="<?= in_array(service('uri')->getSegment(1), ['dashboard-pd-m', 'data-pelanggan-pd-m', 'tindak-lanjut-pd-m', 'selesai-pd-m']) ? 'true' : 'false' ?>"
        aria-controls="ui-basic-2">
        <span class="menu-title">Perubahan Daya</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-flash menu-icon"></i>
      </a>
      <div class="collapse <?= in_array(service('uri')->getSegment(1), ['dashboard-pd-m', 'data-pelanggan-pd-m', 'tindak-lanjut-pd-m', 'selesai-pd-m']) ? 'show' : '' ?>" id="ui-basic-2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'dashboard-pd-m' ? 'active' : '' ?>" href="/dashboard-pd-m">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'data-pelanggan-pd-m' ? 'active' : '' ?>" href="/data-pelanggan-pd-m">Data Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'tindak-lanjut-pd-m' ? 'active' : '' ?>" href="/tindak-lanjut-pd-m">Tindak Lanjut</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'selesai-pd-m' ? 'active' : '' ?>" href="/selesai-pd-m">Selesai</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>