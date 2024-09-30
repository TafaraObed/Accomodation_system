<?php 
  // $loggedUser = $_COOKIE['email'];
  $loggedUser = $_SESSION['user_email'] ;
 function route($route, $id=null){  
    if($id){
        return "?route=$route&id=$id";
    }
    return "?route=" . $route;
 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?? 'AMS'; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/student_accomodation_sys/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/student_accomodation_sys/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/student_accomodation_sys/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/student_accomodation_sys/assets/images/favicon.png" />
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">

    <!--navbar-->
    <?php include("navbar.php"); ?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        <!--Side Nav-->
        <?php include("sidenav.php"); ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Display session messages -->
            <?php include("session_messages.php"); ?>
            <?php include($content); ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">NUST <a href="#">Accomodation System</a> V1 </span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/student_accomodation_sys/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/student_accomodation_sys/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/student_accomodation_sys/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="/student_accomodation_sys/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/student_accomodation_sys/assets/js/off-canvas.js"></script>
    <script src="/student_accomodation_sys/assets/js/template.js"></script>
    <script src="/student_accomodation_sys/assets/js/settings.js"></script>
    <script src="/student_accomodation_sys/assets/js/hoverable-collapse.js"></script>
    <script src="/student_accomodation_sys/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/student_accomodation_sys/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/student_accomodation_sys/assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>