<?php



$title = "Order #".$viewOrder; 
$sql = "SELECT * FROM orders WHERE order_id = '$viewOrder'";
$result = $conn->query($sql);


if($result->num_rows == 0) {
    $errorDisplay = "Unknown order or you don't have access to it!";
    include $_SERVER['DOCUMENT_ROOT'].'/templates/error/view-order.php'; 
    }else{

        $row = mysqli_fetch_assoc($result);        
    $id = $row['order_id'];
    $status = $row['order_status'];
    $orderTIme = $row['order_date'];
    $price = $row['order_price'];
    
    $fName = $row['first_name'];
    $lName = $row['last_name'];
    $age = $row['user_age'];
    $email = $row['order_email'];
    
    $drawing = $row['drawing'];
    $reading = $row['reading'];
  

    if($_SESSION['email'] != $email){
        $errorDisplay = "Unknown order or you don't have access to it!";
        include $_SERVER['DOCUMENT_ROOT'].'/templates/error/view-order.php'; 
    }else{
    

?>

<div class="container-fluid py-0 px-0 px-md-3 py-md-3" data-layout="container">
    <section class="py-0 overflow-hidden light" id="banner">
        <div class="container p-0">

    <?php
    if(isset($_SESSION['loggedIn'])){ 
        if($_SESSION['loggedIn']=="yes"){ //Check if user is logged in
        
    
    ?>

        <div class="row gx-0 gy-2 g-xl-4 h-100">
    <div class="col-12 col-sm-12 col-xl-4 text-center p-0 rounded-3">
      <div class="position-relative p-4 pt-md-5 pb-md-7 light topbar-gradient rounded-3">
          <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
          <div class="avatar avatar-4xl status-online"> 
          <figure class="figure"><img class="rounded-circle" src="/assets/img/team/avatar.png" alt="Avatar" />
          <figcaption class="figure-caption text-white fs-1"><?php echo $userFName; ?></figcaption>
          </figure>
        </div>
         <hr>
          <div class="z-index-1 position-relative my-3"><a href="/dashboard/" class="link-light mb-1 fs-1 d-block">Back to Orders</a>
     </div>
    </div>
  </div>


  <div class="col-12 col-sm-12 col-xl-8">
      <div class="p-0 flex-grow-1 d-flex flex-column">

            <div class="card mb-3 p-0">
            <div class="card-header bg-light  px-3 px-md-4 px-lg-4 py-3 topbar-gradient">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1" style="color:#fff;"> Order #<?php echo $viewOrder; ?> </h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-3">
            <img class="img-thumbnail d-block mx-auto mb-2 mt-2" src="<?php echo $drawing; ?>" alt="Drawing" />
            <p><?php echo $generalOrderHeader."<br><br>"; echo nl2br($reading); echo "<br><br>".$generalOrderFooter;?></p>
            </div>
        </div>
      </div>
  </div>
  <?php
      }
    }else{ //Not logged in
    include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/login.php'; 
    }
}
}
    ?>
            
        </div>
    </section>
</div>