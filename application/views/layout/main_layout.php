<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventory System</title>
  <?php $this->load->view("include/styles") ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php $this->load->view("include/navbar") ?>

    <!-- Main Sidebar Container -->
    <?php $this->load->view("include/sidebar") ?>

    <!-- Content -->
    <?php $this->load->view($page_content)?>

    <!-- footer -->
    <?php $this->load->view("include/footer") ?>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 
<?php $this->load->view("include/main_scripts") ?>

<?php if (isset($page_scripts) && !empty($page_scripts)) {
    $this->load->view($page_scripts);
} ?>
</body>
</html>
