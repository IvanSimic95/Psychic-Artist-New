<?php
/* $title          = $v['p'.$productID.'-title']; $shorttitle     = $v['p'.$productID.'-short-title']; $subtitle       = $v['p'.$productID.'-subtitle']; $description    = $v['p'.$productID.'-description']; $sdescription   = $v['p'.$productID.'-short-description']; $image          = $v['p'.$productID.'-image']; $price          = $v['p'.$productID.'-price']; $reviews        = $v['p'.$productID.'-reviews']; $avgrating      = $v['p'.$productID.'-avg-rating']; $url            = $v['p'.$productID.'-url']; $button         = $v['p'.$productID.'-button']; $pimage = $image; include $_SERVER['DOCUMENT_ROOT'].'/templates/schema.php';  */



$sql = "SELECT * FROM products WHERE id = '" . $productID . "'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_NUM);


$title = $row[1];
$shorttitle = $row[2];
$codename = $row[3];
$subtitle = $row[4];
$description = $row[5];
$sdescription = $row[6];
$image = $row[7];
$price = $row[8];
$url = $row[9];
$button = $row[10];
$sales = $row[11];

$sql2 = "SELECT * FROM orders WHERE order_product = '" . $codename . "'";
$result2 = $conn->query($sql2);
$countsales = $result2->num_rows; //Count orders with this product

$sales = $sales + $countsales; //Combine orders from DB with fake value from product in DB
//$sales = number_format($sales);

$fsales = time();
$fsales = $fsales / 30;
$fsales = round($fsales);

$fsales = substr($fsales, 6);

$sales = $sales + $fsales;

include $_SERVER['DOCUMENT_ROOT'] . '/templates/rating/rating-total.php';


$reviews = $count;
$avgrating = $avg;

$pimage = $image;
include $_SERVER['DOCUMENT_ROOT'] . '/templates/schema.php';



?>

<div class="container product-container container-bg p-0 py-sm-2 py-md-3 py-xl-4" data-layout="container">
<style>
  @media only screen and (max-width: 600px) {
    .rounded-3{
  border-radius:0!important;
}
}

  </style>
    <section class="pb-6 pt-0 light" id="banner">
        <!-- PRODUCT START -->
        <div class="card mb-3 rounded-3">
            <div class="card-body rounded-3" style="padding:0!important;">
                <div class="row row ms-auto w-100">
                    <!-- Content-->
                    <div class="col-lg-6 mb-4 mb-lg-0 p-0 p-md-2 p-lg-4">
                        
                            <!-- Product Gallery -->
                        <div class="product-badge-bestselling">
                        <i class="fas fa-fire"></i>
                        <span class="caption"> Bestseller!</span>
                        </div>

                        <div class="product-badge-toprated">
                        <i class="fas fa-star"></i>
                        <span class="caption"> Top Rated!</span>
                        </div>

                        <div class="product-badge-trending">
                        <i class="fas fa-bolt"></i>
                        <span class="caption"> Featured!</span>
                        </div>

                        <div class="product-badge-new">
                        <i class="fas fa-bell-plus"></i>
                        <span class="caption"> New!</span>
                        </div>
                           
                            <img alt="Product Image" class="rounded-3" src="<?php echo $pimage; ?>" style="width:100%;">
                            <!-- END Product Gallery -->
                        
                    </div>
                    <!-- Sidebar-->
                    <div class="col-lg-6 border-start rounded-3 px-3 px-md-4 px-lg-4 py-3 position-relative">

                    <div class="d-flex flex-column justify-content-start flex-fill product-details-column">
                             

                                <h1 class="mb-2 product-title text-grad-1 mt-2 text-truncate"><?php echo $title; ?></h1>
                                <div class="under-title">
                                <span class="under-title-stock"><i class="fas fa-check-circle"></i> In Stock</span>
                                
                                 <a href="#reviews" title="Scroll to Reviews!" data-bs-placement="bottom" data-bs-toggle="tooltip" data-bs-original-title="Scroll to Reviews!">
                                 <span class="under-title-reviews"><i class="fas fa-comments"></i> <?php echo $reviews; ?> Reviews</span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <?php if ($avgrating < 4.51) { ?>
                                  <span class="fa fa-star-half"></span>
                                  <?php
}
else { ?>
                                  <span class="fa fa-star"></span>
                                  <?php
}?>
                                  
                                  </a>

                                 
                                
                                </div>
                                <hr>
                                <h2 class="d-flex flex-row flex-wrap align-items-center position-relative">
                                    <span class="badge me-0 new_prce" style="background: #FF4F81;color:#fff;">$<?php echo $price; ?></span>
                                    <span class="me-1 fs-1 text-600 old_price"><del class="me-1">$<?php echo $price * 10; ?></del></span>
                                    <div class="price-side">
                                     You save: <span class="saveda text-success">$<?php echo round($price * 9); ?> </span><span class="saved-percent">(90%)</span><span class="product-loop-down-arrow-wrap d-inline-block"></span> </div>
                                </h2>
                                <hr>
                                <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/form.php'; ?>

                       
                                <hr>

                                <div class="bg-secondary rounded p-3 mt-2 mb-2 product-stats">
                                
                                <span style="float:left;">
                                <i class="fas fa-star align-middle mb-0 mt-n1 mr-2"></i> Rating: </span>
                                <p class="h4 mb-0">
                               
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <?php if ($avgrating < 4.51) { ?>
                                  <span class="fa fa-star-half"></span>
                                  <?php
}
else { ?>
                                  <span class="fa fa-star"></span>
                                  <?php
}?>

                                    </p>
                                </div>

                                <div class="bg-secondary rounded p-3 mt-2 mb-2 product-stats product-stats-sales">
                                    <span style="float:left;">
                                    <i class="fas fa-shopping-cart align-middle mb-0 mt-n1 mr-2"></i> Sales: </span>
                                    <div class="h4 mb-0" data-countup='{"endValue":<?php echo $sales; ?>, "separator":" "}'>0</div>
                                </div>

                               

                                <div class="bg-secondary rounded p-3 mt-2 mb-2 product-stats product-stats-reviews">
                                    <span style="float:left;">
                                    <i class="fas fa-comments align-middle mb-0 mt-n1 mr-2"></i> Reviews: </span>
                                    <div class="h4 mb-0" data-countup='{"endValue":<?php echo $reviews; ?>, "separator":" "}'>0</div>
                                </div>


                   



                                <?php //  include $_SERVER['DOCUMENT_ROOT'].'/templates/badges.php'; ?>
                                <?php //include $_SERVER['DOCUMENT_ROOT'].'/templates/product-discounts.php'; ?>

                    </div>

                    </div>
                    <!-- END SIDEBAR -->
                </div>
            </div>
        </div>
        <!-- PRODUCT END -->
        
        <!-- Buyer Protection START -->
        <div class="card mb-3 p-0">
            <div class="card-header bg-light py-3">
                <div class="d-flex flex-between-center">
                <h3 class="mb-0 fw-semibold fs-1"> Buyer Protection </h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-3">
            <div class="row justify-content-center mb-30-none">
            
                <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-12 mb-4 align-middle">
                     <center><img class="me-3" src="/assets/img/icons/shield.png" alt="" width="80" height="80" alt="Buyer Protection Logo"></center>
                </div>
            
                    <div class="col-xl-11 col-lg-10 col-md-10 col-sm-10 col-12 mb-4 align-middle">
                            <div class="form-check mb-0">
                              <input class="form-check-input" id="protection-option-1" type="checkbox" checked="checked" onclick="return false;">
                              <label class="form-check-label mb-0" for="protection-option-1"> <strong>Full Refund </strong>If you don't receive your order</label>
                            </div>
                            <div class="form-check mb-0">
                              <input class="form-check-input" id="protection-option-2" type="checkbox" checked="checked" onclick="return false;">
                              <label class="form-check-label mb-0" for="protection-option-2"> <strong>Full Refund </strong>If the product is not as described in details</label>
                            </div>
                            <div class="form-check mb-0">
                              <input class="form-check-input" id="protection-option-3" type="checkbox" checked="checked" onclick="return false;">
                              <label class="form-check-label mb-0" for="protection-option-3"> <strong>Full Refund </strong>If the product is not delivered inside delivery priority</label>
                            </div>
                    </div>
                 </div>
            </div>
        </div>
        <!--  Buyer Protection END -->
        <!-- DESCRIPTION START -->
        <div class="card mb-3 p-0">
            <div class="card-header bg-light py-3">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1"> Description </h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-3">
                
                <?php echo $description; ?>
             
            </div>
        </div>
        <!-- DESCRIPTION END -->
        <!-- Review List START -->
        <div class="card mb-3 p-0" id="reviews">
            <div class="card-header bg-light py-3">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1"> Reviews - <?php echo $reviews; ?> </h3>
                </div>
            </div>
            <div class="card-body p-2">
               <?php include("templates/rating/rating-product.php"); ?>
            </div>
        </div>
        <!-- Review List END -->
        <!-- FAQ START -->
        <div class="card mb-3 faq-card">
        <div class="card-header bg-light py-3 p-3 ">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1"> Frequently Asked Questions</h3>
                </div>
            </div>
        <div class="card-body p-0">
            




<?php
//SQL Query for fetching FAQ from Database
$conn = new mysqli($servername, $username, $password, $db);
$sql = "SELECT * FROM faq ORDER BY id DESC";
$result = $conn->query($sql);
$count = $result->num_rows;
?>




    <div class="accordion border-x border-top rounded" id="accordionFaq">

    <?php
            if($result->num_rows != 0) {
                while($row = $result->fetch_assoc()) {
                echo '
                <div class="card shadow-none border-bottom rounded-bottom-0">
                <div class="card-header p-0" id="faqAccordionHeading'.$row["id"].'">
                    <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-start collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFaqAccordion'.$row["id"].'" aria-expanded="false" aria-controls="collapseFaqAccordion'.$row["id"].'">
                        <span class="fas fa-caret-right accordion-icon me-3" data-fa-transform="shrink-2"></span> 
                        <span class="fw-medium font-sans-serif text-900">'.$row["question"].'</span></button>
                </div>
                <div class="bg-light collapse" id="collapseFaqAccordion'.$row["id"].'" aria-labelledby="faqAccordionHeading'.$row["id"].'" data-parent="#accordionFaq" style="">
                    <div class="card-body">
                        <p class="ps-4 mb-0">'.$row["answer"].'</p>
                    </div>
                </div>
            </div>';  
        }
                } else {
                    echo "No FAQ";
                }
                  $conn->close();
                ?>


        
       
    </div>



























        </div>
        
    </div>
        <!-- FAQ END -->
        <!-- FEATURES START -->
        <div class="card p-3 features-card">

            <div class="card-body px-3 px-md-4 px-lg-4 pt-5 pb-2">
            
            <div class="row justify-content-center mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-4">
                    <div class="info-item" title="We Protect Your Privacy!" data-bs-placement="bottom" data-bs-toggle="tooltip">
                        <div class="info-icon"><img src="/assets/img/icons/privacy.svg" alt="Ribbon"></div>
                        <div class="info-content d-none d-md-block">
                            <p class="">We Protect Your Privacy</p>
                        </div>
                    </div>
                </div> <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-4">
                    <div class="info-item" title="100% Satisfaction Guaranteed" data-bs-placement="bottom" data-bs-toggle="tooltip">
                        <div class="info-icon"><img src="/assets/img/icons/ribbon.svg" alt="Ribbon"></div>
                        <div class="info-content d-none d-md-block">
                            <p class="">100% Satisfaction Guaranteed</p>
                        </div>
                    </div>
                </div> <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-4">
                    <div class="info-item" title="Your Information Is Secure" data-bs-placement="bottom" data-bs-toggle="tooltip">
                        <div class="info-icon"><img src="/assets/img/icons/secure.svg" alt="Ribbon"></div>
                        <div class="info-content d-none d-md-block">
                            <p class="">Your Information Is Secure</p>
                        </div>
                    </div>
                </div>
                         
                    </div>
        </div>
        <div class="privacy-message alert alert-info mb-0">We Respect Your Privacy &amp; Information</div>
    </div>
        <!--  FEATURES END -->
        
    </section>
</div>

<?php
include("templates/product-customjs.php");
$customCSS = '<link href="/assets/css/product.css" rel="stylesheet">';
?>