<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/config.php';

echo "Starting start-orders.php...<br><br>";
    





// 1. Check and select paid orders.

	$sqlpending = "SELECT * FROM `orders` WHERE `order_status` = 'paid'";
	$resultpending = $conn->query($sqlpending);
	if($resultpending->num_rows == 0) {
	   echo "No Orders with STATUS = PAID found in database.";
	}else{
		while($row = $resultpending->fetch_assoc()) {
			echo "Paid Orders: ".$resultpending->num_rows."<br><br>";
			
			$orderName = $row["user_name"];
		    $ex = explode(" ",$orderName);
			$customerName =  $ex["0"];
			$orderId = $row["order_id"];
			$orderProduct = $row["order_product"];
			$orderPriority = $row["order_priority"];
			$orderEmail = $row["order_email"];
			$emailLink = $base_url ."/dashboard.php?check_email=" .$orderEmail;
			$message = $processingWelcome;

			$cart = $row["abandoned_cart"];

			$message = str_replace("%ORDERID%",   $orderId, $message);
			$message = str_replace("%PRIORITY%",  $orderPriority, $message);
			$message = str_replace("%EMAILLINK%", $emailLink , $message);

			echo $orderId." | ";
			echo $orderEmail." | ";
			echo $orderProduct." | ";
			echo $orderPriority." | ";

			$CreatedAt = time();
			
			//CODE TO SEND EMMAIL NOTIFYING ABOUT SWITCHING ORDER STATUS TO PROCESSING

			
			if($cart=="active"){
			//CODE TO STOP ABANDONED CART PROCESS
			$ch = curl_init();
			$data = [
			"user_id" => $orderId,
			"action" => "Cart Recovered",
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
            

		 	//	Update Order Status Processing
			$sqlupdate = "UPDATE `orders` SET `order_status`='processing' WHERE order_id='$orderId'";
			if ($conn->query($sqlupdate) === TRUE) {
      		echo "Status changed to Processing!";

			//Save data to orders log
			$TimeNow = date('y-m-d H:i:s', time());
    		$sql2 = "INSERT INTO orders_log (order_id, type, time, notice) VALUES ('$orderId', 'status', '$TimeNow', 'Order Status updated to Processing!')";
   			if ($conn->query($sql2) === TRUE) {
   			}
		

      		} else {
			echo "Error";
			}
			echo "<br>";
		}
	}
	echo "<br><hr>";
 ?>
