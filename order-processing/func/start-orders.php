<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/config.php';

echo "Starting start-orders.php...<br><br>";
    





// 1. Check and select paid orders.

	$sqlpending = "SELECT * FROM `orders` WHERE `order_status` = 'paid'";
	$resultpending = $conn->query($sqlpending);
	if($resultpending->num_rows == 0) {
	   echo "No Orders with STATUS = PAID found in database.";
	}else{
		echo "Paid Orders: ".$resultpending->num_rows."<br><br>";
			$logArray['4'] = "Paid Orders: ".$resultpending->num_rows;
		while($row = $resultpending->fetch_assoc()) {
$logArray = array();
$logArray['1'] = date("d-m-Y H:i:s");

			
			$orderName = $row["user_name"];
		    $fName = $row["first_name"];
			$lName = $row["last_name"];
			$orderID = $row["order_id"];
			$userID = $row["user_id"];
			$orderProduct = $row["order_product"];
			$orderPriority = $row["order_priority"];
			$orderPrio = $orderPriority;
			$orderSex = $row["pick_sex"];
			$userSex = $row["user_sex"];
			$orderEmail = $row["order_email"];
			$emailLink = $base_url ."/dashboard.php?check_email=" .$orderEmail;
			$message = $processingWelcome;

			$price = $row["order_price"];
			$bg_email = $row["bg_email"];
			$product_nice = $row["product_nice"];

			$cart = $row["abandoned_cart"];

			$message = str_replace("%ORDERID%",   $orderID, $message);
			$message = str_replace("%PRIORITY%",  $orderPriority, $message);
			$message = str_replace("%EMAILLINK%", $emailLink , $message);

			$logArray[] = $orderID;
			$logArray[] = $orderEmail;
			$logArray[] = $orderProduct."-".$orderPriority;
			$CreatedAt = time();
			
			//CODE TO SEND EMMAIL NOTIFYING ABOUT SWITCHING ORDER STATUS TO PROCESSING

			if($cart=="active"){
			//CODE TO STOP ABANDONED CART PROCESS
			$ch = curl_init();
			$data = [
			"action" => "Cart Recovered",
			"email" => $orderEmail,
			"created_at" => $CreatedAt
			];
			$jData = json_encode($data);
			curl_setopt($ch, CURLOPT_URL, 'https://beacon.crowdpower.io/events');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_POSTFIELDS, $jData);
			$headers = array();
			$headers[] = 'Content-Type: application/json';
			$headers[] = 'Authorization: Bearer sk_7b8f2be0b4bc56ddf0a3b7a1eed2699d19e3990ebd3aa9e9e5c93815cdcfdc64';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$result = curl_exec($ch);
			$logArray[] =  "Stop Event Sent";


			}
            

		 	//	Update Order Status Processing
			$sqlupdate = "UPDATE `orders` SET `order_status`='processing' WHERE order_id='$orderID'";
			if ($conn->query($sqlupdate) === TRUE) {
      			echo "Status changed to Processing!";
				$logArray[] = "Update Status Success";
			} else {
				$logArray[] = "Updated Status Failed";
			}

			//Save data to orders log
			$TimeNow = date('y-m-d H:i:s', time());
    		$sql2 = "INSERT INTO orders_log (user_id, order_id, type, time, notice) VALUES ('$userID', '$orderID', 'status', '$TimeNow', 'Order Status updated to Processing!')";
   			if ($conn->query($sql2) === TRUE) {
				$logArray[] = "Insert Log Success";
   			} else {
				$logArray[] = "Insert Log Failed";
			}

			
			//Send data to zapier so it can submit FB conversion and send an email to user
			$ch = curl_init();
			$data = [
			"fname" => $fName,
			"lname" => $lName,
			"orderID" => $orderID,
			"userID" => $userID,
			"email" => $orderEmail,
			"priority" => $orderPrio,
			"product" => $orderProduct,
			"product_nice" => $product_nice,
			"gender" => $userSex,
			"Pgender" => $orderSex,
			"price" => $price
			];

			$jData = json_encode($data);
			curl_setopt($ch, CURLOPT_URL, 'https://hooks.zapier.com/hooks/catch/4722157/bih1wv9/');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_POSTFIELDS, $jData);
			$headers = array();
			$headers[] = 'Content-Type: application/json';
			$headers[] = 'Authorization: Bearer sk_7b8f2be0b4bc56ddf0a3b7a1eed2699d19e3990ebd3aa9e9e5c93815cdcfdc64';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$result = curl_exec($ch);
			$logArray[] =  "Data sent to zapier";
			echo "Data sent to zapier";

			SuperLog($logArray, "start-orders");
			unset($logArray);
            echo " <br>"; 
		}
	}
	echo "<br><hr>";
 ?>
