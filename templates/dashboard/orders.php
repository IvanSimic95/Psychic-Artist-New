<?php
$order_email = $userEmail;
$sql = "SELECT * FROM orders WHERE order_email = '$order_email' ORDER BY order_id DESC";
$result = $conn->query($sql);
?>

<table id="orders">
    <thead>
        <tr class="table100-head topbar-gradient">
	        <th class="column1"># ID</th>
	    	<th class="column2">Product</th>
	    	<th class="column3">Price</th>
	    	<th class="column4">Status</th>
	    	<th class="column5">View Order</th>
	    </tr>
    </thead>
	
    <tbody>
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
                    echo "<tr id='" . $row["order_id"] . "' class='my-2 my-xl-0 mx-2 mx-md-2 mx-xl-0 p-2' style='border: 1px solid #36304a;border-radius: 8px;'><td class='column-title custom-gradient-one'>Order #" . $row["order_id"] . "</td><td class='column1'>#" . $row["order_id"] . "</td><td class='column2'><div class='badge badge-product'><div class='phone-table-title'>Order Product:</div>" . $product . "</div></td><td class='column3'><div class='badge badge-price'><div class='phone-table-title'>Order Price:</div>$" . $row["order_price"]. "</div></td><td class='column4'><div class='sbadge sbadge-" . $status . "'><div class='phone-table-title'>Order Status:</div>" . $status . " <i class='fas fa-check'></i><i class='fas fa-stream'></i><i class='fas fa-redo'></i><i class='fas fa-ban'></i></div></td><td class='column5'><button data-toggle='modal' data-target='#order-".$row["order_id"]."' class='btn btn-dark btn-shadow w-100 m-0'>View Order #" . $row["order_id"] . "</button></td></tr>";
            
            
                    $id = $row["order_id"];


                    $orderModals = <<<EOT
                   
                    EOT;
                    echo $orderModals;
            }


            ?>

	    	</tbody>
</table>