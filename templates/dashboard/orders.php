<?php
$order_email = $_SESSION['email'];
$sql = "SELECT * FROM orders WHERE order_email = '$order_email' ORDER BY order_id DESC";
$result = $conn->query($sql);
?>

<?php
            while($row = $result->fetch_assoc()) {
            $product = strtolower($row["order_product"]);
            $productCodename = $product;
            $product = ucwords($product);
            switch ($product) {
              case "Husband":
               $product = "Future Husband Drawing";
                break;
            case "Pastlife":
                $product = "Past Life Drawing";
                break;
            case "Baby":
                $product = "Future Baby Drawing";
                break;
            case "Soulmate":
                $product = "Soulmate Drawing";
                break;
            case "Twinflame":
                $product = "Twin Flame Drawing";
                break;


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


                    
                }
                    $id = $row["order_id"];
                    $price = $row["order_price"];
                    $orderDate = $row["order_date"];
                    $link = $row["link"];
                    $status = $row["order_status"];

                 
                    
                    include $_SERVER['DOCUMENT_ROOT'].'/templates/progress.php';
                    
                    if($status=="pending"){
                        $orderBTN = '<a target="_blank" href="'.$link.'" class="btn btn-dark text-uppercase w-100 mt-2">Finish Purchase</a>';
                    }elseif($status=="canceled"){
                        $orderBTN = '';
                    }else{
                        $orderBTN = '<a href="/dashboard/order/'.$id.'" class="btn btn-dark text-uppercase w-100 mt-2">Order Details</a>';
                    }

                    $time = time_ago($orderDate);
                     
$orders = <<<EOT
                    <div class="order my-3 bg-light rounded-3">
                    <div class="row">
                        <div class="col-lg-4 p-0">
                            <div class="d-flex flex-column justify-content-between order-summary py-1 px-1 text-center">
                                <div class="text-uppercase fw-bold mb-2 text-grad-1">Order #$id</div>
                                <img class="img-thumbnail d-block mx-auto mb-1 mt-1" src="https://pa.test/assets/img/products/$productCodename/11.jpg" alt="$product Product Image" />
                                
                                       
                            </div>
                        </div>
                        <div class="col-lg-8 p-0">
                        <div class="d-flex flex-column justify-content-between order-summary p-2 text-center orders-list">
                        <div class="product fw-semi-bold mb-2">$product</div>
                            
                            $statusProgress
                            <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
                                $orderBTN
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>                  
EOT;
echo $orders;
            }


            ?>