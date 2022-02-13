  <div class="row gx-0 gy-2 g-xl-4 h-100">
    <div class="col-12 col-sm-12 col-xl-4 text-center p-0">
      <div class="position-relative p-4 pt-md-5 pb-md-7 light topbar-gradient rounded-3">
          <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
        <div class="avatar avatar-4xl status-online"> 
          <figure class="figure"><img style="background-color: #fff;border: 3px solid #fff;" class="rounded-circle" src="/assets/img/team/avatar.png" alt="Avatar" />
          <figcaption class="figure-caption text-white fs-1"><?php echo $userFName; ?></figcaption>
          </figure>
        </div>
     <hr>

          <div class="z-index-1 position-relative my-3"><div class="link-light mb-1 fs-3 d-block fw-bold">Orders</div>
          <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/navbar/dashboard.php'; ?>


     </div>
    </div>
  </div>


  <div class="col-12 col-sm-12 col-xl-8">
      <div class="p-0 flex-grow-1 d-flex flex-column">
          <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/orders.php'; ?>
      </div>
  </div>

<?php
$customJSPreload = '';
$customCSS = '
<!--=====================================CUSTOM CSS================================================-->
<link rel="stylesheet" type="text/css" href="/vendors/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/vendors/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/vendors/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/assets/css/orders.css">
<!--===============================================================================================-->
';
$customJS = <<<EOT
<script src="/vendors/select2/select2.min.js"></script>
<script>
$(document).ready(function() {

  $('#orders tr').click(function() {
      var OrderID = $(this).attr("id");
      var path = "/dashboard/order/"
      var href = path.concat(OrderID);
      window.location = href;
  });

});
</script>
EOT;
?>