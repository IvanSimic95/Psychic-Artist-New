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

<div class="container product-container container-bg" data-layout="container">
    <section class="py-4 light" id="banner">
        <!-- PRODUCT START -->
        <div class="card mb-3 rounded-3">
            <div class="card-body rounded-3" style="padding:0!important;">
                <div class="row row ms-auto w-100">
                    <!-- Content-->
                    <div class="col-lg-6 mb-4 mb-lg-0 p-4">
                        
                            <!-- Product Gallery -->
                            <img class="rounded-3" src="/assets/img/products/soulmate-1.jpg" style="width:100%;">
                            <!-- END Product Gallery -->
                        
                    </div>
                    <!-- Sidebar-->
                    <div class="col-lg-6 border-start rounded-3 p-4 position-relative">

                    <div class="d-flex flex-column justify-content-start flex-fill">
                                <?php // include_once $_SERVER['DOCUMENT_ROOT'].'/templates/floating-product-badges.php'; ?>
                                <h1 class="mb-0 product-title">Soulmate Drawing & Reading</h1>
                                <div class="under-title"><a href="#reviews"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span>(203) </a></div>
                                <hr class="m-2">



                                <h2 class="d-flex flex-row flex-wrap align-items-center position-relative">
                                    <span class="badge me-0 new_prce" style="background: #FF4F81;color:#fff;">$29.99</span>
                                    <span class="me-1 fs--1 text-500 old_price"><del class="me-1">$299</del></span>
                                    <div class="fs-1" style="border-left: 1px solid #d8e2ef;padding-left: 10px;">
                                     You save: <span class="saveda text-success">$270 </span>(90%)<span class="product-loop-down-arrow-wrap d-inline-block"></span> </div>
                                </h2>

                                <br> <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/templates/form.php'; ?>

                                <hr> <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/templates/badges.php'; ?>
                                <?php  //include_once $_SERVER['DOCUMENT_ROOT'].'/templates/product-discounts.php'; ?>

                    </div>

                    </div>
                    <!-- END SIDEBAR -->
                </div>
            </div>
        </div>
        <!-- PRODUCT END -->
        <!-- DESCRIPTION START -->
        <div class="card mb-3 p-0">
            <div class="card-header bg-light py-3">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1">Product Description </h3>
                </div>
            </div>
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
                </div>
            </div>
            <div class="card-body p-4">
                <div class="row"> <?php include("templates/rating/rating-product.php"); ?> </div>
            </div>
        </div>
        <!-- Review List END -->
    </section>
</div>