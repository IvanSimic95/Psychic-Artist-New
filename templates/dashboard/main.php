<?php
$order_email = $_SESSION['email'];
$sql = "SELECT * FROM orders WHERE order_email = '$order_email' ORDER BY order_id DESC LIMIT 3";
$result = $conn->query($sql);
?>
<div class="row g-3 mb-3 mt-0">
    <div class="col-12">
        <div class="card p-2">
        <div class="bg-holder bg-card" style="background-image:url(/assets/img/icons/spot-illustrations/corner-6.png);"></div>

            <div class="card-body d-flex align-items-center p-2">
                <div class="avatar avatar-4xl d-none d-sm-inline-block"><img class="rounded-circle"  src="https://avatars.dicebear.com/api/adventurer/<?php echo $_SESSION['email']; ?>.svg" alt="" /></div>
                <div class="mx-1 mx-sm-4">
                    <p class="h4">Hello <?php echo $_SESSION['fname']; ?></p>
                    <p class="h6">You are logged in as: <?php echo $_SESSION['email']; ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-3">
            <div class="col-sm-6 col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative" style="min-height:110px;">
                  <h6>Pending Orders</h6>
                  <div class="display-4 fs-4 mt-3 fw-normal font-sans-serif text-warning" ><?php echo $_SESSION['peOrders']; ?></div>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-2.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative" style="min-height:110px;">
                  <h6>Processing Orders</h6>
                  <div class="display-4 fs-4 mt-3 fw-normal font-sans-serif text-info"><?php echo $_SESSION['pOrders']; ?></div>
          
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-3.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative" style="min-height:110px;">
                  <h6>Completed Orders</h6>
                  <div class="display-4 fs-4 mt-3 fw-normal font-sans-serif text-success"><?php echo $_SESSION['cOrders']; ?></div>
                
                </div>
              </div>
            </div>
          </div>

            <?php
            while($row = $result->fetch_assoc()) {
            $product = strtolower($row["order_product"]);
            $productCodename = $product;
            $product = ucwords($product);
            switch ($product) {
              case "Husband":
               $product = "Future Husband Drawing";
               $productCodename = "futurespouse";
                break;
            case "Pastlife":
                $product = "Past Life Drawing";
                $productCodename = "pastlife";
                break;
            case "Baby":
                $product = "Future Baby Drawing";
                $productCodename = "futurebaby";
                break;
            case "Soulmate":
                $product = "Soulmate Drawing";
                $productCodename = "soulmate";
                break;
            case "Twinflame":
                $product = "Twin Flame Drawing";
                $productCodename = "twinflamme";
                break;
                case "Future-baby":
                    $product = "Future Baby Drawing";
                    $productCodename = "futurebaby";
                    break;

                    /*
                    case "General":
                    $product = "Personal Reading: General";
                    break;

                    case "General Love":
                    $product = "Personal Reading: General & Love";
                    break;

                    case "General Love Career":
                    $product = "Personal Reading: General, Love & Career";
                    break;

                    case "General Love Career Health":
                    $product = "Personal Reading: General, Love, Career & Health";
                    break;

                    
                    case "Love":
                    $product = "Personal Reading: Love";
                    break; 

                    case "Love Career":
                    $product = "Personal Reading: Love & Career";
                    break;
    
                    case "Love Career Health":
                    $product = "Personal Reading: Love, Career & Health";
                    break;


                    case "Career":
                    $product = "Personal Reading: Career";
                    break;

                    case "Career Health":
                    $product = "Personal Reading: Health & Career";
                    break;
        
                    case "Health":
                    $product = "Personal Reading: Health";
                    break;
*/
case "General":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;

    case "General Love":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;

    case "General Love Career":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;

    case "General Love Career Health":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;

    
    case "Love":
    $product = "Personal Reading";
    $productCodename = "personal";
    break; 

    case "Love Career":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;

    case "Love Career Health":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;


    case "Career":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;

    case "Career Health":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;

    case "Health":
    $product = "Personal Reading";
    $productCodename = "personal";
    break;

                    
                }
                    $status = $row["order_status"];
                    $id = $row["order_id"];
                    $price = $row["order_price"];
                    $orderDate = $row["order_date"];
                    $link = $row["link"];

                    include $_SERVER['DOCUMENT_ROOT'].'/templates/progress.php';
                    
                    if($status=="pending"){
                        $orderBTN = '<a target="_blank" href="'.$link.'" class="btn btn-dark text-uppercase w-100 mt-2">Purchase - $'.$price.'</a>';
                    }elseif($status=="canceled"){
                        $orderBTN = '';
                    }else{
                        $orderBTN = '<a href="/dashboard/order/'.$id.'" class="btn btn-dark text-uppercase w-100 mt-2">Order Details</a>';
                    }

                    $time = time_ago($orderDate);
                     
$orders = <<<EOT

        <div class="card mb-3 mt-2">
            <div class="card-body d-flex align-items-center p-2">
                <div class="row g-3 mb-3">
                <div class="col-12 col-lg-4 p-3 d-flex flex-column text-center">
                    <div class="text-uppercase fw-bold mb-0 text-grad-1 display-6">Order #$id</div>
                    <div class="product mb-2">$product</div>
                    <img style="max-width:80%" class="img-thumbnail d-block mx-auto mb-1 mt-1" src="https://$domain/assets/img/products/$productCodename/1.jpg" alt="$product Product Image" />
                </div>
                <div class="col-12 col-lg-8 d-flex flex-column justify-content-between order-summary p-3 text-center orders-list">
                    
                    $statusProgress
                    <div class="d-sm-flex align-items-sm-start justify-content-sm-between">$orderBTN</div>
                </div>
                </div>
            </div>
        </div>
EOT;
echo $orders;
            }


            ?>
<a href="/dashboard/orders" class="btn btn-dark btn-shadow w-100 m-0 mb-3">View All Orders</a>