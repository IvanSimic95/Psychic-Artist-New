<?php
$p = array (
    'title' => 'Psychic Artist',
    'description' => 'Test Description',
    'logo' => '/assets/img/icons/spot-illustrations/falcon.png',
    'price' => '29.99',
    'reviews' => '149',
    'avg-rating' => '4.7',
    'url' => 'https://pa.test/soulmate',
  );

require_once $_SERVER['DOCUMENT_ROOT'].'/templates/schema.php';

$customJS = '
<script src="/vendors/countup/countUp.umd.js"></script>
<script src="/assets/js/lazyload.js"></script>
<script src="/assets/js/jquery.mask.js"></script>
<script src="/assets/js/jquery.star-rating-svg.js"></script>
<script src="/assets/js/product-page.js"></script>

<script>
$(".my-rating1").starRating({
    starSize: 30,
    strokeWidth: 9,
    readOnly: true,
    strokeColor: \'black\',
    initialRating: '.$v["p2-avg-rating"].',
    starGradient: {
      start: \'#d130eb\',
      end: \'#2b216c\'
    }
  });
</script>

';
$customCSS = '
<link href="/assets/css/lazyload.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/assets/css/star-rating-svg.css">
<link rel="stylesheet" type="text/css" href="/assets/css/review.css">
';
?>

<div class="page-title-overlap bg-accent pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav style="--falcon-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item text-nowrap"><a href="/">Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="/shop/">Shop</a></li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Soulmate Drawing</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start product-title-wrapper">
            <h1 class="mb-0 product-title">Soulmate Drawing & Reading</h1>
          
        </div>
    </div>
</div>
<div class="container product-container" data-layout="container" style="margin-top: -6rem;">
    <section class="py-4 light" id="banner">
        <!--
    <nav id="product-nav" class="navbar product-navbar sticky-top">
        <ul class="nav nav-pills nav-justified" style="width:100%;">
            <li class="nav-item">
                <a class="nav-link" href="#galleryTop">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#purchase">Purchase</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#description">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#reviews">Reviews</a>
            </li>
        </ul>
    </nav>
        -->

        <!-- PRODUCT START -->
        <div class="card mb-3">
            <div class="card-body" style="padding:0!important;">
                <div class="row">
                    <!-- Content-->
                    <section class="col-lg-7 pt-2 pt-lg-4 pb-2 mb-lg-3">
                        <div class="pt-2 px-3 pe-lg-0 ps-xl-5">
                            <!-- Product Gallery -->
                            <img class="rounded-3" src="/assets/img/products/flame-1.jpg" style="width:100%;">
                           


                            <!-- END Product Gallery -->
                        </div>
                    </section>
                    <!-- Sidebar-->
                    <aside class="col-lg-5 ps-xl-5" style="padding-right: 15px!important;">
                        <div class="bg-white h-100 p-4 ms-auto border-start">
                            <div class="px-lg-2">
                                <!--<h3 class="mb-3 mt-2"><?php echo $v["p2-subtitle"]; ?></h3>-->
                                <div class="d-flex py-2 product-header-rating">
              <div class="review-rating d-inline-block" style="color:#fe696a;">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
              </div>
              <span class="d-inline-block fs-sm opacity-70 align-middle">(<?php echo $v["p2-avg-rating"]; ?>)</span>
            </div>
                                <h2 class="d-flex flex-row flex-wrap align-items-center position-relative">
                                    <span class="text-warning me-0 new_prce">$29.99</span>
                                    <span class="me-1 fs--1 text-500 old_price"><del class="me-1">$299</del></span>
                                    
                                    <div class="fs-1" style="width:100%;"> You save: <span class="saveda text-success">$270 </span><span class="product-loop-down-arrow-wrap d-inline-block"></span> </div>
                                    <div data-bs-placement="bottom" data-bs-toggle="tooltip" title="" data-bs-original-title="Product is in stock and available for purchase!" class="product-badge product-available mt-n1"><i class="fas fa-shield-check"></i> Available</div>

                                    <div data-bs-placement="bottom" data-bs-toggle="tooltip" title="" data-bs-original-title="90% Discount!" class="product-badge product-available mt-n1 pr-discount-wrap"><img src="/assets/img/badge/down-arrow.webp"> -90%</div>
                                
                                    


                                   
                                    
                                </h2>
                                <hr> <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/templates/form.php'; ?>

                                <hr>
                                <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/templates/badges.php'; ?>
                                <hr>

                                <?php  //include_once $_SERVER['DOCUMENT_ROOT'].'/templates/product-discounts.php'; ?>
                                
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- PRODUCT END -->

        

        <!-- DESCRIPTION START -->
        
        <div class="card mb-3 p-0">
        <div class="card-header bg-light py-3">
        <div class="d-flex flex-between-center">
    <h3 class="mb-0 fw-semibold fs-1">Product Description </h3>
    </div></div>
            <div class="card-body p-4">
                <div class="row">
                <p class="fs-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3 class="h5 pt-2">Main features</h3>
                <ul class="fs-1 px-4">
                  <li>Nemo enim ipsam voluptatem quia voluptas sit</li>
                  <li>Ut enim ad minima veniam, quis nostrum exercitationem</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                  <li>At vero eos et accusamus et iusto odio dignissimos</li>
                  <li>Omnis voluptas assumenda est omnis dolor</li>
                  <li>Quis autem vel eum iure reprehenderit qui in ea voluptate</li>
                </ul>

               
                                
                </div>
            </div>
        </div>
        <!-- DESCRIPTION END -->

         <!-- Review List START -->
        
         <div class="card mb-3 p-0">
         <div class="card-header bg-light py-3">
        <div class="d-flex flex-between-center">
    <h3 class="mb-0 fw-semibold fs-1">Total Reviews - 213 </h3>
    </div></div>
            <div class="card-body p-4">
                <div class="row">
                <?php include("templates/rating/rating-product.php"); ?>

                </div>
            </div>
        </div>
        <!-- Review List END -->


    </section>
</div>