<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/config.php';

echo "Starting abbandoned-carts.php...<br><br>";
    





// 1. Check and select paid orders.

	$sqlpending = "SELECT * FROM `orders` WHERE `order_status` = 'pending'";
	$resultpending = $conn->query($sqlpending);
	if($resultpending->num_rows == 0) {
	   echo "No Orders with STATUS = PENDING found in database.";
	}else{
        echo "Pending Orders: ".$resultpending->num_rows."<br><br>";
		while($row = $resultpending->fetch_assoc()) {
            $LogEntry= "";
			
			$orderDate = $row["order_date"];
			$orderName = $row["user_name"];
		    $ex = explode(" ",$orderName);
			$customerName =  $ex["0"];
			$orderId = $row["order_id"];
			$orderProduct = $row["order_product"];
			$orderPriority = $row["order_priority"];
			$orderEmail = $row["order_email"];
			$emailLink = $base_url ."/dashboard.php?check_email=" .$orderEmail;

            $date1 = $orderDate;
			$date2 =  date("Y-m-d H:i:s");
			$start = new \DateTime($date1);
			$end = new \DateTime($date2);
			$interval = new \DateInterval('PT1H');
			$periods = new \DatePeriod($start, $interval, $end);
			$hours = iterator_count($periods);

			$LogEntry.=  $orderId." | ";
			$LogEntry.=  $orderEmail." | ";
			$LogEntry.=  $orderProduct." | ";
			$LogEntry.=  $orderPriority." | ";
            $LogEntry.=  $hours." hours ago | ";

			$CreatedAt = time();
        if($hours > 1 && $hours < 72){

			   // Set order to canceled
			   $sqlupdate2 = "UPDATE `orders` SET `abandoned_cart`='active' WHERE order_id='$orderId'";
			   if ($conn->query($sqlupdate2) === TRUE) {
			   $LogEntry.=  "Order info updated";
			   }

            //CODE TO START ABANDONED CART PROCESS
			$ch = curl_init();
			$data = [
			"user_id" => $orderId,
			"action" => "Cart Abandoned",
			"email" => $orderEmail,
			"created_at" => $CreatedAt
			];
			$jData = json_encode($data);
			print_r($jData);
			curl_setopt($ch, CURLOPT_URL, 'https://beacon.crowdpower.io/events');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_POSTFIELDS, $jData);
			$headers = array();
			$headers[] = 'Content-Type: application/json';
			$headers[] = 'Authorization: Bearer sk_7b8f2be0b4bc56ddf0a3b7a1eed2699d19e3990ebd3aa9e9e5c93815cdcfdc64';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$result = curl_exec($ch);
        }

        if($hours > 72){
            // Set order to canceled
			$sqlupdate = "UPDATE `orders` SET `order_status`='canceled' WHERE order_id='$orderId'";
            if ($conn->query($sqlupdate) === TRUE) {
            $LogEntry.=  "Order Canceled because it exceedes 72 hours since creation";
            }

			//Save data to orders log
			$TimeNow = date('y-m-d H:i:s', time());
			$sql2 = "INSERT INTO orders_log (order_id, type, time, notice) VALUES ('$orderId', 'status', '$TimeNow', 'Order Status changed to Canceled!')";
			if ($conn->query($sql2) === TRUE) {
			}

            //CODE TO NOTIFY USER THAT ORDER WAS CANCELED
        }
            echo $LogEntry;
            SuperLog($LogEntry, "abandoned");
            echo " <br>";
        }

    }
    echo "<br><hr>"
 ?>
