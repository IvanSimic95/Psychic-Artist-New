<div class="row gx-0 gy-2 g-xl-4 h-100">
    <div class="col-12 col-sm-12 col-xl-4 text-center py-2 rounded-3">
      <div class="position-relative p-4 pt-md-5 pb-md-7 light topbar-gradient rounded-3">
          <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
          <div class="avatar avatar-4xl status-online"> 
          <figure class="figure"><img style="background-color: #fff;border: 3px solid #fff;" class="rounded-circle" src="https://avatars.dicebear.com/api/adventurer/<?php echo $_SESSION['email']; ?>.svg" alt="Avatar" />
          <figcaption class="figure-caption text-white fs-1"><?php echo $_SESSION['name']; ?></figcaption>
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
