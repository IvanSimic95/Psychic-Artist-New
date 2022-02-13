<?php
/* $title          = $v['p'.$productID.'-title']; $shorttitle     = $v['p'.$productID.'-short-title']; $subtitle       = $v['p'.$productID.'-subtitle']; $description    = $v['p'.$productID.'-description']; $sdescription   = $v['p'.$productID.'-short-description']; $image          = $v['p'.$productID.'-image']; $price          = $v['p'.$productID.'-price']; $reviews        = $v['p'.$productID.'-reviews']; $avgrating      = $v['p'.$productID.'-avg-rating']; $url            = $v['p'.$productID.'-url']; $button         = $v['p'.$productID.'-button']; $pimage = $image; include $_SERVER['DOCUMENT_ROOT'].'/templates/schema.php';  */

$_SESSION['funnel_page'] = "main";

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

<div class="container product-container container-bg p-0 py-sm-2 py-md-3 py-xl-4 position-relative" style="height: 100%; overflow: auto;" data-layout="container" data-bs-spy="scroll" data-bs-target="#phone-navbar" data-bs-offset="50">
    <section class="pb-6 pt-0 light" id="banner">
        <!-- PRODUCT START -->
        <div class="card mb-3 rounded-3 section" id="purchase-product">
            <div class="card-body rounded-3" style="padding:0!important;">
                <div class="row row ms-auto w-100">
                    <!-- Content-->
                    <div class="col-lg-6 mb-2 mb-lg-0 p-0 p-md-2 p-lg-4">
                        
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
                    <!-- Right Part-->
                    <div class="col-lg-6 border-start rounded-3 px-3 px-md-4 px-lg-4 py-0 py-md-2 position-relative">

                    <div class="d-flex flex-column justify-content-start flex-fill product-details-column py-2">
                             

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
                                    <span class="badge me-0 new_prce">$<?php echo $price; ?></span>
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
  <!-- HIGHLIGHTS START -->
  <div class="card mb-3 p-0 section" id="highlights">
        <div class="card-header bg-light py-3 px-4 topbar-gradient text-white">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1 text-white "> What makes us special? </h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-3">
            
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 mb-4">
                    <div class="info-item">
                        <div class="info-icon"><img src="/assets/img/icons/ball.gif" alt="Ribbon"></div>
                        <div class="info-contentt">
                            <p class="h4 text-center">Beautiful Hand-Drawn Sketch</p>
                            <p class="text-center">Your psychic artist will draw a highly detailed and hand-drawn image addressed to you only. It can be printed off for your own framing if you'd like!</p>
                            <hr class="d-block d-xl-none mt-5">
                        </div>
                    </div>
                </div> <div class="col-xl-4 col-lg-4 col-md-12 col-12 mb-4">
                    <div class="info-item">
                        <div class="info-icon"><img src="/assets/img/icons/fortune.gif" alt="Ribbon"></div>
                        <div class="info-contentt">
                            <p class="h4 text-center">Experienced Psychic Artist</p>
                            <p class="text-center">Our psychics have been performing soulmate drawings & readings for years. This is a time-tested technique that has created excellent results for thousands of our clients.</p>
                            <hr class="d-block d-xl-none mt-5">
                        </div>
                    </div>
                </div> <div class="col-xl-4 col-lg-4 col-md-12 col-12 mb-4">
                    <div class="info-item">
                        <div class="info-icon"><img src="/assets/img/icons/tarot.png" alt="Ribbon"></div>
                        <div class="info-contentt">
                            <p class="h4 text-center">Detailed Psychic Reading</p>
                            <p class="text-center">Using your name, birthday, and preferences our psychics use their deep understanding of tarot to provide an accurate depiction of your soulmate.</p>
                            <br class="d-block d-xl-none mt-5">
                          
                        </div>
                    </div>
                </div>
                         
                    </div>
        </div>
      
    </div>
        <!--  HIGHLIGHTS END -->
        <!-- DESCRIPTION START -->
        <div class="card mb-3 p-0 section" id="description">
        <div class="card-header bg-light py-3 px-4 topbar-gradient text-white">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1 text-white "> <?php echo $title; ?> </h3>
                </div>
        </div>
        <div class="card-body px-3 px-md-4 px-lg-4 py-3">
        <div class="row justify-content-center mb-30-none">
        

        <div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-4 d-flex flex-wrap align-content-around">
        <?php echo $description; ?>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-4"><img class="d-block mx-auto" style="width:70%;" src="/assets/img/icons/drawing.jpg"></div> 
        </div>
        </div>
        </div>
        <!-- DESCRIPTION END -->


      

       

        <!-- DESCRIPTION START -->
        <div class="card mb-3 p-0 section" id="more-info">
            <div class="card-header bg-light py-3 px-4  topbar-gradient ">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1 text-white"> What is a Soulmate Drawing? </h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-3">
            <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-4"><img class="img-fluid" src="/assets/img/icons/tarot-card.jpg"></div> 
                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-4 d-flex flex-wrap align-content-around">
                        <p class="h3">What is a Soulmate Drawing?</p>
                        <p class="mb-3 more-info-paragraph">Simply put, a soulmate sketch is a drawing of your soul's other half performed by a psychic. Your psychic will use your metaphysical attributes to connect with your soul mate and do their best to recreate that image for you.</p>
                        <p class="mb-3 more-info-paragraph">Soulmate drawings can be important and meaningful, as many psychics see your soulmate's face in a vision. A true soulmate is eternal and exists beyond the physicality of the world. <strong>We all have someone out there for us</strong>, but finding that right person can take time too!</p>
                        <p class="mb-3 more-info-paragraph">Our sketches are unique, spiritual gifts that you will cherish forever.</p>
                        <p class="mb-3 more-info-paragraph">Hand-drawn portrait sketches should not be confused with a photograph or a work of art that you would purchase from an online shop. Whenever we speak to our clients or read their energy through clairvoyance, we receive images from spirits as well as feelings and sensations about their partner. This information comes through as symbol readings and images, that we sketch for you.</p>
                        <p class="mb-3 more-info-paragraph"><strong>Soulmate drawing is a psychic artist gift, and it is never the same</strong>. The reason why it is so difficult to find your perfect match is that there's so much competition out there! Every soul on this planet deserves true love, which is why we decided to create our business. We want you all to feel loved and happy with yourself.</p>
                
                    </div>
                </div>
             
            </div>
        </div>
        <!-- DESCRIPTION END -->

         <!-- MORE INFO START -->
         <div class="card mb-3 p-0 more-info">
        <div class="card-header bg-light py-3 px-4 topbar-gradient text-white">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1 text-white "> Perfection takes time! </h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-3">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-4 d-flex flex-wrap align-content-around">
                        <p class="h3">Soulmate Drawings Are a Time-Consuming Activity That Can't Be Rushed or Controlled.</p>
                        <p class="mb-3 more-info-paragraph">We cannot rush the spirit world, that's how everything works here. This service will take time as well as patience since it takes an incredibly long time for each soulmate drawing to come through correctly for you.</p>
                        <p class="mb-3 more-info-paragraph">There are many steps involved in creating your portrait; including cleansing and meditating. <strong>Drawing someone's physical appearance takes time, even for a psychic artist</strong>.</p>
                        <p class="mb-3 more-info-paragraph">Your unique reading will be performed by a psychic.</p>
                        <p class="mb-3 more-info-paragraph">Our psychic abilities are channeled with the use of tarot to perform deep readings. This tarot spread is included with your soulmate drawings. These readings are incredibly deep and allow you to gain insight into yourself, your relationship, and the people involved. Our psychic readers are very experienced at what they do, meaning that <strong>each reading that comes through will be detailed and accurate.</strong></p>
                        <p class="mb-3 more-info-paragraph">This means that every soul will receive a different image of their soul mate since everyone in this world is unique.</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-4"><img class="img-fluid" src="/assets/img/icons/tarot-card2.jpg"></div> 
                </div>
            </div>  
        </div>
        <!--  MORE INFO END -->

    
        <!-- Review List START -->
        <div class="card mb-3 p-0 section" id="reviews">
            <div class="card-header bg-light py-3 px-4 topbar-gradient text-white">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1 text-truncate text-white" title="Reviews - <?php echo $reviews; ?>"> Reviews - <?php echo $reviews; ?> </h3>
                </div>
            </div>
            <div class="card-body p-2">
               <?php include("templates/rating/rating-product.php"); ?>
            </div>
        </div>
        <!-- Review List END -->
        <!-- FAQ START -->
        <div class="card mb-3 faq-card" id="faq">
        <div class="card-header bg-light py-3  px-4  topbar-gradient text-white">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1 text-truncate text-white" title="Frequently Asked Questions"> Frequently Asked Questions</h3>
                </div>
            </div>
        <div class="card-body p-0 py-1">
            




<?php
//SQL Query for fetching FAQ from Database
$conn = new mysqli($servername, $username, $password, $db);
$sql = "SELECT * FROM faq ORDER BY id DESC";
$result = $conn->query($sql);
$count = $result->num_rows;
$i = 0;
?>




    <div class="accordion border-x border-top rounded" id="accordionFaq">
    <?php
            if($result->num_rows != 0) {
                while($row = $result->fetch_assoc()) {
                $i++;
                if($count==$i){ //Last loop
                    echo '
                    <div class="card shadow-none border-bottom">
                    <div class="card-header p-0" id="faqAccordionHeading'.$row["id"].'">
                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-3 px-4 border-0 text-start collapsed text-truncate" data-bs-toggle="collapse" data-bs-target="#collapseFaqAccordion'.$row["id"].'" aria-expanded="false" aria-controls="collapseFaqAccordion'.$row["id"].'">
                            <span class="fas fa-caret-right accordion-icon me-0" data-fa-transform="shrink-2"></span> 
                            <span class="fw-medium font-sans-serif text-900">'.$row["question"].'</span></button>
                    </div>
                    <div class="bg-light collapse" id="collapseFaqAccordion'.$row["id"].'" aria-labelledby="faqAccordionHeading'.$row["id"].'" data-parent="#accordionFaq" style="">
                        <div class="card-body p-2">
                            <p class="ps-3 py-3 mb-0">'.$row["answer"].'</p>
                        </div>
                    </div>
                </div>';  
                }else{
                echo '
                <div class="card shadow-none border-bottom rounded-bottom-0">
                <div class="card-header p-0" id="faqAccordionHeading'.$row["id"].'">
                    <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-3 px-4 border-0 text-start collapsed text-truncate" data-bs-toggle="collapse" data-bs-target="#collapseFaqAccordion'.$row["id"].'" aria-expanded="false" aria-controls="collapseFaqAccordion'.$row["id"].'">
                        <span class="fas fa-caret-right accordion-icon me-0" data-fa-transform="shrink-2"></span> 
                        <span class="fw-medium font-sans-serif text-900">'.$row["question"].'</span></button>
                </div>
                <div class="bg-light collapse" id="collapseFaqAccordion'.$row["id"].'" aria-labelledby="faqAccordionHeading'.$row["id"].'" data-parent="#accordionFaq" style="">
                    <div class="card-body p-2">
                        <p class="ps-3 py-3 mb-0">'.$row["answer"].'</p>
                    </div>
                </div>
            </div>';  
        }
            
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
        
        
        <!-- BUYER PROTECTION START -->
        <div class="card p-0 features-card">
        <div class="card-header bg-light py-3  px-4 topbar-gradient text-white">
                <div class="">
                <h3 class=" d-inline-block mb-0 fw-semibold fs-1 text-white"> Buyer Protection & Satisfaction </h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-4">
            
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-2">
                    <div class="info-item" title="We Protect Your Privacy!" data-bs-placement="bottom" data-bs-toggle="tooltip">
                        <div class="info-icon"><img src="/assets/img/icons/privacy.svg" alt="Ribbon"></div>
                        <div class="info-content d-none d-md-block">
                            <p class="">We Protect Your Privacy</p>
                        </div>
                    </div>
                </div> <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-2">
                    <div class="info-item" title="100% Satisfaction Guaranteed" data-bs-placement="bottom" data-bs-toggle="tooltip">
                        <div class="info-icon"><img src="/assets/img/icons/ribbon.svg" alt="Ribbon"></div>
                        <div class="info-content d-none d-md-block">
                            <p class="">100% Satisfaction Guaranteed</p>
                        </div>
                    </div>
                </div> <div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-2">
                    <div class="info-item" title="Your Information Is Secure" data-bs-placement="bottom" data-bs-toggle="tooltip">
                        <div class="info-icon"><img src="/assets/img/icons/secure.svg" alt="Ribbon"></div>
                        <div class="info-content d-none d-md-block">
                            <p class="">Your Information Is Secure</p>
                        </div>
                    </div>
                </div>
                         
                    </div>
                    <div class="privacy-message alert alert-info">We Respect Your Privacy &amp; Information</div>
        </div>
       
    </div>
        <!--  BUYER PROTECTION END -->
        
    </section>
</div>
<?php  include $_SERVER['DOCUMENT_ROOT'].'/templates/navbar/phone-navbar.php'; ?>
<?php
$customJSPreload = '<link rel="preload" href="/assets/js/product.js" as="script">';
$customCSS = '<link href="/assets/css/product.css" rel="stylesheet">';
$customJS = <<<EOT
<script defer="defer" src="/assets/js/product.js"></script>
<script>  
$('.nav-link').click(function(){    
    var divId = $(this).attr('href');
     $('html, body').animate({
      scrollTop: $(divId).offset().top + 0
    }, 100);
  });

  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 500) {
        $('#phone-navbar').slideDown();
    
    } else {
        $('#phone-navbar').slideUp();

    }
  });
</script>
<script>
$(document).ready(function(){
const instance0 =  new TypeIt(".type-it-zero", {
strings: ["<span class='fw-bold'>$subtitle</span><br>", "Psychic Artist (通灵艺术家) is a master of astrology famous in China for being able to draw anyone's soulmate. Thousands of people have found love thanks to Artist's gift.<br>", "Answer just a few simple questions and Psychic Artist will draw you a picture of your $shorttitle"],
waitUntilVisible: true,
lifeLike: true,
loop: false,
html: true,
breakLines: true,
speed: 5, 
afterComplete: function (instance) {
instance.destroy();
$("#start-form-btn").slideToggle();
}
})

instance0.go();
});
</script>
EOT;
?>