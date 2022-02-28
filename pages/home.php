<?php
$title = "Home | Psychic Artist";
header("Location: https://".$domain."/shop/soulmate");
die();?>
<div class="container-fluid" data-layout="container" style="padding:0!important;">
    <section class="py-0 overflow-hidden light" id="banner">
        <div class="container">
               
    <?php if(isset($_GET['loggedOut'])){ ?>
      <div class="alert alert-success border-2 d-flex align-items-center mt-4 mb-4" role="alert">
      <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
      <p class="mb-0 flex-1">You have been logged out!</p>
      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php } ?>

        </div>
    </section>
</div>