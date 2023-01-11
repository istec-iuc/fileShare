<!DOCTYPE html>
<html lang="tr">
<?php session_start() ?>
<?php 
	if(!isset($_SESSION['login_id']))
	    header('location:login.php');
	include 'header.php' 
?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <?php include 'topbar.php' ?>
  <?php include 'sidebar.php' ?>

  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Siteye ilgili bilgiler</h1>
          </div><!-- /.col -->
          <div>
        
   

</div>

        </div>
        <div class="alert alert-secondary" role="alert">
            <div>
        <p>Bu site açık kaynak kodlu bir proje üzerinde değişiklikler yapılarak kullanılmıştır.<br>
     Kaynak kod: https://www.sourcecodester.com/php/14592/simple-online-document-sharing-system-using-phpmysqli-source-code.html</p>
     </div>
     <br>
     <div>
        <p>This site used modifications on an open source project<br>
    Source code: https://www.sourcecodester.com/php/14592/simple-online-document-sharing-system-using-phpmysqli-source-code.html</p>
     </div>
</div>
      
</div>
            <hr class="border-primary">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">

    <div class="float-right d-none d-sm-inline-block">
      <b>Online Dosya paylaşma sitesi</b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- Bootstrap -->
<?php include 'footer.php' ?>
</body>
</html>
