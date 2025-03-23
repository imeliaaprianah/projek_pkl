<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard PLN Gambut</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('purple-free/src/assets/vendors/mdi/css/materialdesignicons.min.css?v=1.0') ?>" />
    <link rel="stylesheet" href="<?= base_url('purple-free/src/assets/vendors/ti-icons/css/themify-icons.css?v=1.0') ?>" />
    <link rel="stylesheet" href="<?= base_url('purple-free/src/assets/vendors/css/vendor.bundle.base.css?v=1.0') ?>" />
    <link rel="stylesheet" href="<?= base_url('purple-free/src/assets/vendors/font-awesome/css/font-awesome.min.css?v=1.0') ?>" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('purple-free/src/assets/vendors/font-awesome/css/font-awesome.min.css?v=1.0') ?>" />
    <link rel="stylesheet" href="<?= base_url('purple-free/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css?v=1.0') ?>" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('purple-free/src/assets/css/style.css?v=1.0') ?>" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('purple-free/src/assets/images/favicon.png?v=1.0') ?>" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?= $this->include('layout/navmanager') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?= $this->include('layout/sidemanager') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
                
            </div>
            
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('purple-free/src/assets/vendors/js/vendor.bundle.base.js?v=1.0') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('purple-free/src/assets/vendors/chart.js/chart.umd.js?v=1.0') ?>"></script>
    <script src="<?= base_url('purple-free/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js?v=1.0') ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('purple-free/src/assets/js/off-canvas.js?v=1.0') ?>"></script>
    <script src="<?= base_url('purple-free/src/assets/js/misc.js?v=1.0') ?>"></script>
    <script src="<?= base_url('purple-free/src/assets/js/settings.js?v=1.0') ?>"></script>
    <script src="<?= base_url('purple-free/src/assets/js/todolist.js?v=1.0') ?>"></script>
    <script src="<?= base_url('purple-free/src/assets/js/jquery.cookie.js?v=1.0') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url('purple-free/src/assets/js/dashboard.js?v=1.0') ?>"></script>
    <!-- End custom js for this page -->
</body>

</html>