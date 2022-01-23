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

$customJS = '<script src="/vendors/swiper/swiper-bundle.min.js"></script>
<script src="/assets/js/lazyload.js"></script>
<script>
var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: \'#product-nav\'
})
</script>
';
$customCSS = '
<link href="/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="/assets/css/lazyload.css" rel="stylesheet">
';
?>
<style>
.review-avatar {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    margin-right: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    background: linear-gradient(0deg, #fc00ff, #00dbde);
}

.review-time {
    color: #a9a7a7;
    font-size: 80%;
}

.page-title-overlap {
    padding-bottom: 6.375rem;
    background-color: #373f50!important;
}
.product-title-wrapper{
padding-left:0!important;
}
.page-title-overlap > .container{
padding:0!important;
}
.breadcrumb{
  font-size: 0.8125rem;
}
.breadcrumb-item{
padding:0!important;
}
.breadcrumb-light .breadcrumb-item>a {
    color: #fff;
    text-decoration:none!important;
}
.breadcrumb-light .breadcrumb-item.active {
    color: rgba(255,255,255,.6);
}
.breadcrumb-item.active {
    cursor: default;
}
</style>

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
                <h1 class="h3 text-light mb-0 product-title">Soulmate Drawing & Reading</h1>
            </div>
        </div>
</div>

<div class="container product-container" data-layout="container" style="margin-top: -6rem;">
<section class="py-4 light" id="banner">
    
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
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!-- Product Gallery -->
                    <div class="product-slider" id="galleryTop">
                        <div class="swiper-container theme-slider position-lg-absolute all-0" data-swiper='{"autoHeight":true,"spaceBetween":5,"loop":true,"loopedSlides":5,"thumb":{"spaceBetween":5,"slidesPerView":5,"loop":true,"freeMode":true,"grabCursor":true,"loopedSlides":5,"centeredSlides":true,"slideToClickedSlide":true,"watchSlidesVisibility":true,"watchSlidesProgress":true,"parent":"#galleryTop"},"slideToClickedSlide":true}'>
                            <div class="swiper-wrapper h-100">
                                <div class="swiper-slide h-100"><img class="rounded-1 fit-cover h-100 w-100" src="/assets/img/products/1.jpg" alt="" /></div>
                                <div class="swiper-slide h-100"><img class="rounded-1 fit-cover h-100 w-100" src="/assets/img/products/1-2.jpg" alt="" /></div>
                                <div class="swiper-slide h-100"> <img class="rounded-1 fit-cover h-100 w-100" src="/assets/img/products/1-3.jpg" alt="" /></div>
                                <div class="swiper-slide h-100"> <img class="rounded-1 fit-cover h-100 w-100" src="/assets/img/products/1-4.jpg" alt="" /></div>
                                <div class="swiper-slide h-100"> <img class="rounded-1 fit-cover h-100 w-100" src="/assets/img/products/1-5.jpg" alt="" /></div>
                                <div class="swiper-slide h-100"> <img class="rounded-1 fit-cover h-100 w-100" src="/assets/img/products/1-6.jpg" alt="" /></div>
                            </div>
                            <div class="swiper-nav">
                                <div class="swiper-button-next swiper-button-white"></div>
                                <div class="swiper-button-prev swiper-button-white"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Product Gallery -->
              
                <!-- Product Details -->
                <div class="col-lg-6">
                    <h5>Apple MacBook Pro (15" Retina, Touch Bar, 2.2GHz 6-Core Intel Core i7, 16GB RAM, 256GB SSD) - Space Gray (Latest Model)</h5><a class="fs--1 mb-2 d-block" href="#!">Computer &amp; Accessories</a>
                    <div class="fs--2 mb-3 d-inline-block text-decoration-none"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ms-1 text-600">(8)</span>
                    </div>
                    <p class="fs--1">Testing conducted by Apple in October 2018 using pre-production 2.9GHz 6‑core Intel Core i9‑based 15-inch MacBook Pro systems with Radeon Pro Vega 20 graphics, and shipping 2.9GHz 6‑core Intel Core i9‑based 15‑inch MacBook Pro systems with Radeon Pro 560X graphics, both configured with 32GB of RAM and 4TB SSD.</p>
                    <h4 id="purchase" class="d-flex align-items-center"><span class="text-warning me-2">$1200</span><span class="me-1 fs--1 text-500">
                            <del class="me-1">$2400</del><strong>-50%</strong></span></h4>
                    <p class="fs--1 mb-1"> <span>Shipping Cost: </span><strong>$50</strong></p>
                    <p class="fs--1">Stock: <strong class="text-success">Available</strong></p>
                    <p class="fs--1 mb-3">Tags: <a class="ms-2" href="#!">Computer,</a><a class="ms-1" href="#!">Mac Book,</a><a class="ms-1" href="#!">Mac Book Pro,</a><a class="ms-1" href="#!">Laptop </a></p>
                    <div class="row">
                        <div class="col-auto pe-0">
                            <div class="input-group input-group-sm" data-quantity="data-quantity">
                                <button class="btn btn-sm btn-outline-secondary border-300" data-field="input-quantity" data-type="minus">-</button>
                                <input class="form-control text-center input-quantity input-spin-none" type="number" min="0" value="0" aria-label="Amount (to the nearest dollar)" style="max-width: 50px" />
                                <button class="btn btn-sm btn-outline-secondary border-300" data-field="input-quantity" data-type="plus">+</button>
                            </div>
                        </div>
                        <div class="col-auto px-2 px-md-3"><a class="btn btn-sm btn-primary" href="#!"><span class="fas fa-cart-plus me-sm-2"></span><span class="d-none d-sm-inline-block">Add To Cart</span></a></div>
                        <div class="col-auto px-0"><a class="btn btn-sm btn-outline-danger border-300" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wish List"><span class="far fa-heart me-1"></span>282</a></div>
                    </div>
                </div>
            </div>
            <!-- END Product Details -->
            
            <!-- START Product Description -->
            <div class="row">
                <div class="col-12">
                    <div class="overflow-hidden mt-4">
                        <div class="mt-3" id="description">
                            <p>Over the years, Apple has built a reputation for releasing its products with a lot of fanfare – but that didn’t exactly happen for the MacBook Pro 2018. Rather, Apple’s latest pro laptop experienced a subdued launch, in spite of it offering a notable spec upgrade over the 2017 model – along with an improved keyboard. And, as with previous generations the 15-inch MacBook Pro arrives alongside a 13-inch model.</p>
                            <p>Apple still loves the MacBook Pro though, despite the quiet release. This is because, while the iPhone XS and iPad, along with the 12-inch MacBook, are aimed at everyday consumers, the MacBook Pro has always aimed at the creative and professional audience. This new MacBook Pro brings a level of performance (and price) unlike its more consumer-oriented devices. </p>
                            <p>Still, Apple wants mainstream users to buy the MacBook Pro, too. So, if you’re just looking for the most powerful MacBook on the market, you’ll love this new MacBook Pro. Just keep in mind that, while the keyboard has been updated, there are still some issues with it.</p>
                            <p>There’s enough of a difference between the two sizes when it comes to performance to warrant two separate reviews, and here we’ll be looking at how the flagship 15-inch MacBook Pro performs in 2019.</p>
                            <p>It's build quality and design is batter than elit. Numquam excepturi a debitis, sint voluptates, nam odit vel delectus id repellendus vero reprehenderit quidem totam praesentium vitae nesciunt deserunt. Sint, veniam?</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Product Description -->
            <hr class="my-4">
            <!-- START List of Reviews -->
            <div class="row" id="reviews">
                <div class="col-12">
                    <!-- Start New Review Wrapper -->
                    <div class="d-flex align-items-center">
                        <!-- 1st Column Start -->
                        <div class="flex-shrink-0">
                            <!-- Avatar --><img src="assets/img/placeholder.png" data-src="/assets/img/users/1.svg" class="lazyload review-avatar" alt="Ivan Test Avatar">
                            <!-- 1st Column End -->
                        </div>
                        <!-- 2nd Column Start-->
                        <div class="flex-grow-1 ms-3">
                            <!-- User Name & Badge Start-->
                            <div class="mb-1">
                                <span class="text-dark fw-semi-bold">Drik Smith</span>
                                <span class="review-verified badge bg-success"><i aria-hidden="true" class="fas fa-user-check"></i> Verfied</span>
                            </div>
                            <!-- User Name & Badge END-->
                            <!-- Rating Start-->
                            <div class="review-rating">
                                <i class="fa fa-star text-warning fs--1"></i>
                                <i class="fa fa-star text-warning fs--1"></i>
                                <i class="fa fa-star text-warning fs--1"></i>
                                <i class="fa fa-star text-warning fs--1"></i>
                                <i class="fa fa-star text-warning fs--1"></i>
                            </div>
                            <!-- Rating END -->
                        </div>
                        <!-- 2nd Column END-->
                        <!-- 3rd Column Start-->
                        <div class="flex-shrink-0 review-time-wrapper d-none d-sm-block">
                            <!-- Posted Time -->
                            <div class="review-time"><i class="fa fa-clock"></i> <time>2 hours ago</time></div>
                        </div>
                        <!-- 3rd Column END-->
                    </div>
                    <!-- END New Review Wrapper -->
                    <div class="flex-grow-1">
                        <p class="mb-0">You shouldn't need to read a review to see how nice and polished this theme is. So I'll tell you something you won't find in the demo.</p>
                    </div>
                    <hr class="my-4">
                    <div class="mb-1">
                        <span class="fa fa-star text-warning fs--1"></span>
                        <span class="fa fa-star text-warning fs--1"></span>
                        <span class="fa fa-star text-warning fs--1"></span>
                        <span class="fa fa-star text-warning fs--1"></span>
                        <span class="fa fa-star text-warning fs--1"></span>
                        <span class="ms-3 text-dark fw-semi-bold">Awesome support, great code 😍</span>
                    </div>
                    <p class="fs--1 mb-2 text-600">By Drik Smith • October 14, 2019</p>
                    <p class="mb-0">You shouldn't need to read a review to see how nice and polished this theme is. So I'll tell you something you won't find in the demo. After the download I had a technical question, emailed the team and got a response right from the team CEO with helpful advice. </p>
                </div>
            </div>
            <!--END List of Reviews -->
        </div>
    </div>
</section>
</div>