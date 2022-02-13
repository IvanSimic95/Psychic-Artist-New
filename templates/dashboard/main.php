<?php
$order_email = $_SESSION['email'];
$sql = "SELECT * FROM orders WHERE order_email = '$order_email' ORDER BY order_id DESC LIMIT 3";
$result = $conn->query($sql);
?>
<div>
<div class="avatar avatar-3xl d-none d-sm-inline-block">
<img class="rounded-circle"  src="https://avatars.dicebear.com/api/adventurer/<?php echo $_SESSION['email']; ?>.svg" alt="" />
</div>
<div class="d-inline-block">
<p class="h4">Hello <?php echo $_SESSION['fname']; ?>,</p>
<p class="h6">You are logged in as: <?php echo $_SESSION['email']; ?> </p>
</div>
</div>
<hr>
<p class="h4">MY RECENT ORDERS</p>

            <?php
            while($row = $result->fetch_assoc()) {
            $product = strtolower($row["order_product"]);
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
                    if($row["order_status"]=="shipped"){$status="completed";}else{$status = $row["order_status"];}
                   // echo "<tr id='" . $row["order_id"] . "' class='my-2 my-xl-0 mx-2 mx-md-2 mx-xl-0 p-2' style='border: 1px solid #36304a;border-radius: 8px;'><td class='column-title custom-gradient-one'>Order #" . $row["order_id"] . "</td><td class='column1'>#" . $row["order_id"] . "</td><td class='column2'><div class='badge badge-product'><div class='phone-table-title'>Order Product:</div>" . $product . "</div></td><td class='column3'><div class='badge badge-price'><div class='phone-table-title'>Order Price:</div>$" . $row["order_price"]. "</div></td><td class='column4'><div class='sbadge sbadge-" . $status . "'><div class='phone-table-title'>Order Status:</div>" . $status . " <i class='fas fa-check'></i><i class='fas fa-stream'></i><i class='fas fa-redo'></i><i class='fas fa-ban'></i></div></td><td class='column5'><button data-toggle='modal' data-target='#order-".$row["order_id"]."' class='btn btn-dark btn-shadow w-100 m-0'>View Order #" . $row["order_id"] . "</button></td></tr>";
            
            
                    $id = $row["order_id"];
                    $price = $row["order_price"];
                    $orderDate = $row["order_date"];

                    switch ($status){
                        case "pending":
                         $progress = '
                         <li id="step-1" class="text-muted green"> <span class="fas fa-gift"></span> </li>
                         <li id="step-2" class="text-muted"> <span class="fas fa-check"></span> </li>
                         <li id="step-3" class="text-muted"> <span class="fas fa-box"></span> </li>
                         <li id="step-4" class="text-muted"> <span class="fas fa-truck"></span> </li>
                         ';
                        break;
                        case "paid":
                            $progress = '
                            <li id="step-1" class="text-muted green"> <span class="fas fa-gift"></span> </li>
                            <li id="step-2" class="text-muted green"> <span class="fas fa-check"></span> </li>
                            <li id="step-3" class="text-muted"> <span class="fas fa-box"></span> </li>
                            <li id="step-4" class="text-muted"> <span class="fas fa-truck"></span> </li>
                            ';
                        break;
                        case "processing":
                            $progress = '
                            <li id="step-1" class="text-muted green"> <span class="fas fa-gift"></span> </li>
                            <li id="step-2" class="text-muted green"> <span class="fas fa-check"></span> </li>
                            <li id="step-3" class="text-muted green"> <span class="fas fa-box"></span> </li>
                            <li id="step-4" class="text-muted"> <span class="fas fa-truck"></span> </li>
                            ';
                        break;
                        case "completed":
                        $progress = '
                        <li id="step-1" class="text-muted green"> <span class="fas fa-gift"></span> </li>
                        <li id="step-2" class="text-muted green"> <span class="fas fa-check"></span> </li>
                        <li id="step-3" class="text-muted green"> <span class="fas fa-box"></span> </li>
                        <li id="step-4" class="text-muted green"> <span class="fas fa-truck"></span> </li>
                        ';
                        break;
                    }
             
$orders = <<<EOT
<div class="order my-3 bg-light rounded-3">
<div class="row">
    <div class="col-lg-4">
        <div class="d-flex flex-column justify-content-between order-summary ">
            <div class="d-flex align-items-center">
                <div class="text-uppercase fw-bold">Order #$id</div>
                
            </div>
            <div class="">$product</div>
            <div class="">$orderDate</div>
            <div class="rating d-flex align-items-center pt-1"> 
            <img src="https://www.freepnglogos.com/uploads/like-png/like-png-hand-thumb-sign-vector-graphic-pixabay-39.png" alt="">
            <span class="px-2">Rating:</span> 
            <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>            
        </div>
    </div>
    <div class="col-lg-8">
        <div class="d-sm-flex align-items-sm-start justify-content-sm-between">
            <div class="status">Status : $status</div>
            <a href="/dashboard/order/$id" class="btn btn-dark text-uppercase">Order Details</a>
        </div>
        <div class="progressbar-track">
            <ul class="progressbar">
                $progress
            </ul>
            <div id="tracker"></div>
        </div>
    </div>
</div>
</div>                  
EOT;
echo $orders;
            }


            ?>