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
    <li class="nav-item <?= service('uri')->getSegment(1) == 'dashboard-k' ? 'active' : '' ?>">
      <a class="nav-link" href="/dashboard-k">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <!-- Pasang Baru -->
    <li class="nav-item <?= in_array(service('uri')->getSegment(1), ['dashboard-pb-k', 'data-pelanggan-pb-k', 'tindak-lanjut-pb-k', 'selesai-pb-k']) ? 'active' : '' ?>">
      <a class="nav-link <?= in_array(service('uri')->getSegment(1), ['dashboard-pb-k', 'data-pelanggan-pb-k', 'tindak-lanjut-pb-k', 'selesai-pb-k']) ? '' : 'collapsed' ?>"
        data-bs-toggle="collapse" href="#ui-basic-1"
        aria-expanded="<?= in_array(service('uri')->getSegment(1), ['dashboard-pb-k', 'data-pelanggan-pb-k', 'tindak-lanjut-pb-k', 'selesai-pb-k']) ? 'true' : 'false' ?>"
        aria-controls="ui-basic-1">
        <span class="menu-title">Pasang Baru</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-plus-circle menu-icon"></i>
      </a>
      <div class="collapse <?= in_array(service('uri')->getSegment(1), ['dashboard-pb-k', 'data-pelanggan-pb-k', 'tindak-lanjut-pb-k', 'selesai-pb-k']) ? 'show' : '' ?>" id="ui-basic-1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'dashboard-pb-k' ? 'active' : '' ?>" href="/dashboard-pb-k">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'data-pelanggan-pb-k' ? 'active' : '' ?>" href="/data-pelanggan-pb-k">Data Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'tindak-lanjut-pb-k' ? 'active' : '' ?>" href="/tindak-lanjut-pb-k">Tindak Lanjut</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'selesai-pb-k' ? 'active' : '' ?>" href="/selesai-pb-k">Selesai</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Perubahan Daya -->
    <li class="nav-item <?= in_array(service('uri')->getSegment(1), ['dashboard-pd-k', 'data-pelanggan-pd-k', 'tindak-lanjut-pd-k', 'selesai-pd-k']) ? 'active' : '' ?>">
      <a class="nav-link <?= in_array(service('uri')->getSegment(1), ['dashboard-pd-k', 'data-pelanggan-pd-k', 'tindak-lanjut-pd-k', 'selesai-pd-k']) ? '' : 'collapsed' ?>"
        data-bs-toggle="collapse" href="#ui-basic-2"
        aria-expanded="<?= in_array(service('uri')->getSegment(1), ['dashboard-pd-k', 'data-pelanggan-pd-k', 'tindak-lanjut-pd-k', 'selesai-pd-k']) ? 'true' : 'false' ?>"
        aria-controls="ui-basic-2">
        <span class="menu-title">Perubahan Daya</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-flash menu-icon"></i>
      </a>
      <div class="collapse <?= in_array(service('uri')->getSegment(1), ['dashboard-pd-k', 'data-pelanggan-pd-k', 'tindak-lanjut-pd-k', 'selesai-pd-k']) ? 'show' : '' ?>" id="ui-basic-2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'dashboard-pd-k' ? 'active' : '' ?>" href="/dashboard-pd-k">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'data-pelanggan-pd-k' ? 'active' : '' ?>" href="/data-pelanggan-pd-k">Data Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'tindak-lanjut-pd-k' ? 'active' : '' ?>" href="/tindak-lanjut-pd-k">Tindak Lanjut</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'selesai-pd-k' ? 'active' : '' ?>" href="/selesai-pd-k">Selesai</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>