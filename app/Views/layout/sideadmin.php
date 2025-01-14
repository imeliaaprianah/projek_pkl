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
    <li class="nav-item <?= service('uri')->getSegment(1) == 'dashboard-admin' ? 'active' : '' ?>">
      <a class="nav-link" href="/dashboard-admin">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <!-- Pengguna -->
    <li class="nav-item <?= service('uri')->getSegment(1) == 'pengguna' ? 'active' : '' ?>">
      <a class="nav-link" href="/pengguna">
        <span class="menu-title">Pengguna</span>
        <i class="mdi mdi-account menu-icon"></i>
      </a>
    </li>

    <!-- Pasang Baru -->
    <li class="nav-item <?= in_array(service('uri')->getSegment(1), ['dashboard-pb', 'data-pelanggan-pb', 'tindak-lanjut-pb', 'selesai-pb']) ? 'active' : '' ?>">
      <a class="nav-link <?= in_array(service('uri')->getSegment(1), ['dashboard-pb', 'data-pelanggan-pb', 'tindak-lanjut-pb', 'selesai-pb']) ? '' : 'collapsed' ?>"
        data-bs-toggle="collapse" href="#ui-basic-1"
        aria-expanded="<?= in_array(service('uri')->getSegment(1), ['dashboard-pb', 'data-pelanggan-pb', 'tindak-lanjut-pb', 'selesai-pb']) ? 'true' : 'false' ?>"
        aria-controls="ui-basic-1">
        <span class="menu-title">Pasang Baru</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-plus-circle menu-icon"></i>
      </a>
      <div class="collapse <?= in_array(service('uri')->getSegment(1), ['dashboard-pb', 'data-pelanggan-pb', 'tindak-lanjut-pb', 'selesai-pb']) ? 'show' : '' ?>" id="ui-basic-1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'dashboard-pb' ? 'active' : '' ?>" href="/dashboard-pb">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'data-pelanggan-pb' ? 'active' : '' ?>" href="/data-pelanggan-pb">Data Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'tindak-lanjut-pb' ? 'active' : '' ?>" href="/tindak-lanjut-pb">Tindak Lanjut</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'selesai-pb' ? 'active' : '' ?>" href="/selesai-pb">Selesai</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Perubahan Daya -->
    <li class="nav-item <?= in_array(service('uri')->getSegment(1), ['dashboard-pd', 'data-pelanggan-pd', 'tindak-lanjut-pd', 'selesai-pd']) ? 'active' : '' ?>">
      <a class="nav-link <?= in_array(service('uri')->getSegment(1), ['dashboard-pd', 'data-pelanggan-pd', 'tindak-lanjut-pd', 'selesai-pd']) ? '' : 'collapsed' ?>"
        data-bs-toggle="collapse" href="#ui-basic-2"
        aria-expanded="<?= in_array(service('uri')->getSegment(1), ['dashboard-pd', 'data-pelanggan-pd', 'tindak-lanjut-pd', 'selesai-pd']) ? 'true' : 'false' ?>"
        aria-controls="ui-basic-2">
        <span class="menu-title">Perubahan Daya</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-flash menu-icon"></i>
      </a>
      <div class="collapse <?= in_array(service('uri')->getSegment(1), ['dashboard-pd', 'data-pelanggan-pd', 'tindak-lanjut-pd', 'selesai-pd']) ? 'show' : '' ?>" id="ui-basic-2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'dashboard-pd' ? 'active' : '' ?>" href="/dashboard-pd">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'data-pelanggan-pd' ? 'active' : '' ?>" href="/data-pelanggan-pd">Data Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'tindak-lanjut-pd' ? 'active' : '' ?>" href="/tindak-lanjut-pd">Tindak Lanjut</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= service('uri')->getSegment(1) == 'selesai-pd' ? 'active' : '' ?>" href="/selesai-pd">Selesai</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>