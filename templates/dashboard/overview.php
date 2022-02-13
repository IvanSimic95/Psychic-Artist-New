<div class="row gx-0 gy-2 g-xl-4 h-100">
    <div class="col-12 col-sm-12 col-xl-4 text-center py-2">
      <div class="py-2 px-0 light topbar-gradient rounded-3">
         
       
   
          <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/menu.php'; ?>

          


          </div>
    </div>
  </div>
  <?php 
  
switch ($page) {          
case 'overview':
$title = "User Dashboard"; 
$insertPage = "main";
$pageTitle1 = "Account Overview";
$customCSS = '
<!--=====================================CUSTOM CSS================================================-->
<link rel="stylesheet" type="text/css" href="/assets/css/overview.css">
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
break;

case 'orders':
$title = "Your Orders"; 
$insertPage = "orders";
$pageTitle1 = "Your Orders";
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
break;

case 'order':
$title = "User Dashboard"; 
    $insertPage = "order";
    $pageTitle1 = "Order #".$viewOrder;
    break;

            case 'profile':
            $insertPage = "profile";
            $pageTitle1 = "Edit Your Profile";
            break;
              
            default:
            $insertPage = "main";
            $pageTitle1 = "Account Overview";
            break;
          }
         
          $include = $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/'.$insertPage.'.php';
         
          ?>

  <div class="col-12 col-sm-12 col-xl-8 py-2">
      <div class="p-0 flex-grow-1 d-flex flex-column">

      <div class="card mb-3 p-0">
            <div class="card-header bg-light  px-3 px-md-4 px-lg-4 py-3 topbar-gradient">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1" style="color:#fff;"><?php echo $pageTitle1; ?></h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-3">
            <?php  include $include;  ?>
            </div>


         
      </div>
  </div>

<?php

?>