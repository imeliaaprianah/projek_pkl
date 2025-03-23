<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PLN ULP Gambut</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="purple-free/src/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="purple-free/src/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="purple-free/src/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="purple-free/src/assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- inject:css -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="purple-free/src/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="purple-free/src/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="text-center mb-4">
              <img src="purple-free/src/assets/images/logo_PLN.png" alt="Logo PLN" style="width: 150px; height: auto;">
            </div>
            <!-- Jika ada pesan error -->
            <?php if (session()->getFlashdata('pesan')) : ?>
              <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif ?>

            <?php if (session()->getFlashdata('berhasil')) : ?>
              <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('berhasil'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif ?>
            <div class="auth-form-light text-left p-5">
              <h4 class="text-center">Silahkan Login</h4>
              <h6 class="font-weight-light"></h6>
              <form method="POST" action="<?= base_url('login'); ?>" class="pt-3">
                <div class="form-group">
                  <div class="input-group input-group-lg">
                    <span class="input-group-text">
                      <i class="fas fa-user"></i> <!-- Ikon user dari Font Awesome -->
                    </span>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-lg">
                    <span class="input-group-text">
                      <i class="fas fa-lock"></i> <!-- Ikon gembok dari Font Awesome -->
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
                <div class="mt-3 d-grid gap-2">
                  <button type="submit" class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="purple-free/src/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="purple-free/src/assets/js/off-canvas.js"></script>
  <script src="purple-free/src/assets/js/misc.js"></script>
  <script src="purple-free/src/assets/js/settings.js"></script>
  <script src="purple-free/src/assets/js/todolist.js"></script>
  <script src="purple-free/src/assets/js/jquery.cookie.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- endinject -->
</body>

</html>