<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/config.php';
echo "Starting complete-orders.php...<br><br>";

	$sql = 'SELECT * from orders WHERE order_status = "processing"';
	$sqlResoult = $conn->query($sql);
	if($sqlResoult->num_rows == 0) {
	   echo "No Orders with STATUS = PROCESSING found in database.";
	} else {
		echo "Processing Orders: ".$sqlResoult->num_rows."<br><br>";
		while($row = $sqlResoult->fetch_assoc()) {

		$logArray = array();
		$logArray['1'] = date("d-m-Y H:i:s");

			$orderDate = $row["order_date"];
			$orderName = $row["user_name"];
			$ex = explode(" ",$orderName);
			$fName = $ex["0"];
			$orderID = $row["order_id"];
			$userID = $row["user_id"];
			$orderEmail = $row["order_email"];
			$orderAge = $row["user_age"];
			$orderPrio = $row["order_priority"];
			$orderProduct = $row["order_product"];
			$orderSex = $row["pick_sex"];
			$userSex = $row["user_sex"];
			$date1 = $orderDate;
			$date2 =  date("Y-m-d H:i:s");
			$start = new \DateTime($date1);
			$end = new \DateTime($date2);
			$interval = new \DateInterval('PT1H');
			$periods = new \DatePeriod($start, $interval, $end);
			$hours = iterator_count($periods);

			if($userSex == "nonbinary"){
				$userSex = "female";
			}

			if($orderSex == "any"){
				$orderSex = "male";
			}

			if($orderSex == "nonbinary"){
				$orderSex = "male";
			}

			
			$trigger = 0;
			$image_send = 0;
			$randomDelay = rand(0,4);

			$logArray[] = $orderID;
			$logArray[] = $orderProduct."-".$orderPrio;
			$logArray[] = $hours;

			if ($hours >= ($orderPrio - $randomDelay )) {
			echo "Active | ";
			$trigger = 1;
			$logArray[] = "Active";
			}else {
			echo "Waiting | ";
			$logArray[] = "Waiting";
			}
			
			echo ""  . $hours . " hours | ";
			
				if ($orderProduct == "soulmate" || $orderProduct == "husband" || $orderProduct =="twinflame") {
				    $image_send = 1;
					$prod_type = "";
					$img_folder_name = "general";

					$theader = $generalOrderHeader;
					$tfooter = $generalOrderFooter;

					if ($orderProduct == "soulmate") {
						$prod_type = "1";
						$replaceWith = "Soulmate";
					
					}elseif($orderProduct == "husband"){
					$prod_type = "2";
						if($orderSex=="male"){
							$replaceWith = "Future Husband";
						}else{
							$replaceWith = "Future Wife";
						}
					
					}elseif($orderProduct =="twinflame"){
						$prod_type = "3";
						$replaceWith = "Twin Flame";
					
					}

					$age_max = $orderAge + 7;
					$age_min = $orderAge + 2;
					if ($age_max > 67) {
						$age_min = 63;
						$age_max = 67;
					}
					if ($age_min < 20) {
						$age_min = 20;
						$age_max = 24;
					}

					$sql_pick = "SELECT * FROM orders_image WHERE age < '$age_max' AND age > '$age_min' AND sex = '$orderSex' AND product = 'soulmate' order by RAND() limit 1";
					$sql_pick_res = $conn->query($sql_pick);
					if($sql_pick_res->num_rows == 0) {
							 $image_name = "";
					} else {
						while($rowImages = $sql_pick_res->fetch_assoc()) {
							$image_name = $rowImages["name"];
							$logArray[] = "Image ID: ".$rowImages["id"];
						}
					}


					$sql_text = "SELECT * FROM orders_text WHERE product = 'soulmate' AND gender = '$orderSex' order by RAND() limit 1";
					$sql_text_res = $conn->query($sql_text);
					if($sql_text_res->num_rows == 0) {
							 $email_text = "";
					} else {
						while($rowText = $sql_text_res->fetch_assoc()) {
							$email_text = $rowText["text"];
						    $message = $theader.$email_text.$tfooter;
							$logArray[] = "Text ID: ".$rowText["id"];
						}
					}
					

				$message = str_replace('$SOULMATE$',$replaceWith,$message);
				//START IF PRODUCT = FUTURE BABY
			    }elseif ($orderProduct == "future-baby")  { 
				$image_send = "1";
				$prod_type = "baby";
				$img_folder_name = "baby";
				$babyGender = "female";

				$theader = $babyOrderHeader;
				$tfooter = $babyOrderFooter;

						
				if($userSex == "male"){ //If customer sex is set as male
				$babyGender = "male";
				}elseif($userSex == "female"){ //If customer sex is set as female
				$babyGender = "female";
				}
					

				$sql_pick = "SELECT * FROM  orders_image WHERE product = 'baby' order by RAND() limit 1";
				$sql_pick_res = $conn->query($sql_pick);
				
				if($sql_pick_res->num_rows == 0) {
					$image_name = "";
				} else {
					while($rowImages = $sql_pick_res->fetch_assoc()) {
					$image_name = $rowImages["name"];
					$logArray[] = "Image ID: ".$rowImages["id"];
					}
				}
				$sql_text = "SELECT * FROM orders_text WHERE product = '$prod_type' AND gender = '$babyGender' order by RAND() limit 1";
				$sql_text_res = $conn->query($sql_text);
				if($sql_text_res->num_rows == 0) {
						$email_text = "";
				} else {
					while($rowText = $sql_text_res->fetch_assoc()) {
						$email_text = $rowText["text"];
						$message = $theader.$email_text.$tfooter;
						$logArray[] = "Text ID: ".$rowText["id"];
					}
				}
				//END IF PRODUCT = FUTURE BABY




				}elseif (strpos($orderProduct, 'general') !== false || strpos($orderProduct, 'love') !== false || strpos($orderProduct, 'career') !== false || strpos($orderProduct, 'health') !== false) {
				$image_send = 0;
				$email_text = "";
				$theader = $readingOrderHeader;
				$tfooter = $readingOrderFooter;
				if (strpos($orderProduct, 'general') !== false) {

					$sql_text = "SELECT * FROM orders_text WHERE product = 'General' order by RAND() limit 1";
					$sql_text_res = $conn->query($sql_text);
					if($sql_text_res->num_rows == 0) {
					} else {
						while($rowText = $sql_text_res->fetch_assoc()) {
							$email_text .= $rowText["text"] . "\n\n";
							$logArray[] = "Text ID: ".$rowText["id"];
						}
					}
				}
				if (strpos($orderProduct, 'love') !== false) {
					$sql_text = "SELECT * FROM orders_text WHERE product = 'Love' order by RAND() limit 1";
					$sql_text_res = $conn->query($sql_text);
					if($sql_text_res->num_rows == 0) {
					} else {
						while($rowText = $sql_text_res->fetch_assoc()) {
							$email_text .= $rowText["text"] . "\n\n";
							$logArray[] = "Text ID: ".$rowText["id"];
						}
					}
				}
				if (strpos($orderProduct, 'career') !== false) {
					$sql_text = "SELECT * FROM orders_text WHERE product = 'Career' order by RAND() limit 1";
					$sql_text_res = $conn->query($sql_text);
					if($sql_text_res->num_rows == 0) {
					} else {
						while($rowText = $sql_text_res->fetch_assoc()) {
							$email_text .= $rowText["text"] . "\n\n";
							$logArray[] = "Text ID: ".$rowText["id"];
						}
					}
				}
				if (strpos($orderProduct, 'health') !== false) {
					$sql_text = "SELECT * FROM orders_text WHERE product = 'Health' order by RAND() limit 1";
					$sql_text_res = $conn->query($sql_text);
					if($sql_text_res->num_rows == 0) {
					} else {
						while($rowText = $sql_text_res->fetch_assoc()) {
							$email_text .= $rowText["text"] . "\n\n";
							$logArray[] = "Text ID: ".$rowText["id"];
						}
					}
				}
				
				$message = $theader.$email_text.$tfooter;

			}elseif ($orderProduct == "past") {
				$image_send = 1;
				$img_folder_name = "past";

				$theader = $pastOrderHeader;
				$tfooter = $pastOrderFooter;

				$sql_pick = "SELECT * FROM orders_image WHERE product = 'past' order by RAND() limit 1";
				$sql_pick_res = $conn->query($sql_pick);
				if($sql_pick_res->num_rows == 0) {
					 $image_name = "";
				} else {
					while($rowImages = $sql_pick_res->fetch_assoc()) {
						$image_name = $rowImages["name"];
						$logArray[] = "Image ID: ".$rowImages["id"];
						 //echo $image_name . " </br>";
					}
				}

				$sql_text = "SELECT * FROM orders_text WHERE product = 'past' order by RAND() limit 1";
				$sql_text_res = $conn->query($sql_text);
				if($sql_text_res->num_rows == 0) {
						$email_text = "";
				} else {
					while($rowText = $sql_text_res->fetch_assoc()) {
						$email_text = $rowText["text"];
						$message = $theader.$email_text.$tfooter;
						$logArray[] = "Text ID: ".$rowText["id"];
					}
				}
			}
			// end of past life
			
		//If trigger is set to 1 (order is ready to be delivered)
		if ($trigger == 1) {

			$message = str_replace("%FIRSTNAME%", $fName, $message);

			$message = str_replace("'", "\'", $message);

			if ($image_send == "1") { //SEND IMAGE START
						// define image name and new path
							$rootDir = $_SERVER['DOCUMENT_ROOT'];
							$ext = "";
							$sPath = "/order-processing/images/";
							$randomImageName = rand(554547,751547);

						// Old Paths
					        $oldImagename = $image_name;
							$oldImageShortPath = $sPath.$img_folder_name."/".$image_name.$ext;
							
							$oldImageFullPath = $base_url.$oldImageShortPath;
							
							$oldImageServerPath = $rootDir .$oldImageShortPath;

						// new Paths
							$newImagename = $orderProduct ."-" .$randomImageName ."-" .$orderID .".jpg";
							$newImageShortPath = "/email/drawing/".$newImagename;
							$newImageServerPath = $rootDir .$newImageShortPath;
							$newImageFullPath = $base_url .$newImageShortPath;

						//	echo 'New Image path = <a href="' .$newImageFullPath .'">' .$newImageFullPath ."</a><br> Old image path = ".$oldImageFullPath ."<br></a><br> ";
							//echo $img_folder_name.'/'.$oldImagename.'.jpg | ';
							//echo $newImagename.' | ';

						// Set new image path and name

						if (file_exists($oldImageServerPath)) {
							$newImageNameHash = copy($oldImageServerPath, $newImageServerPath);
						} else {
							$oldImageServerPath = $rootDir."/".$oldImageShortPath;
							$newImageNameHash = copy($oldImageServerPath, $newImageServerPath);
						}


							$newImageNameHash = copy($oldImageServerPath, $newImageServerPath);
						// Set image data for upload via CURL
							$imgURL = $newImageFullPath;
                            $filename = $rootDir.'/email/drawing/'.$newImagename;
                      
							//Add image and text to order
							$sqlupdate = "UPDATE `orders` SET `drawing`='$imgURL', `reading`='$message' WHERE order_id='$orderID'";
							if ($conn->query($sqlupdate) === TRUE) {
							echo "Drawing & Reading Added!  | ";
							$logArray[] = "Drawing & Reading Added!";
							}



           				 }else{//SEND ONLY TEXT START
				
				
							//Add text to order
							$sqlupdate = "UPDATE `orders` SET `reading`='$message' WHERE order_id='$orderID'";
							if ($conn->query($sqlupdate) === TRUE) {
							echo "Reading Added! | ";

							$logArray[] = "Reading Added! (No Drawing)";
							}
								//
								//Use $OrderCompleteMessage for email notification
						}



					// Set order to shipped
					$sqlupdate = "UPDATE `orders` SET `order_status`='completed' WHERE order_id='$orderID'";
					if ($conn->query($sqlupdate) === TRUE) {
		     		echo " Status changed to Completed!";
					 $logArray[] = "Status changed to Completed!";
		    		} else {
					echo " Error Updating Status";
					$logArray[] = "Error Updating Status";
					
					}


					//Save data to orders log
					$TimeNow = date('y-m-d H:i:s', time());
    				$sql2 = "INSERT INTO orders_log (user_id, order_id, type, time, notice) VALUES ('$userID', '$orderID', 'status', '$TimeNow', 'Order Status updated to Completed!')";
   					if ($conn->query($sql2) === TRUE) {
					$logArray[] = "Orders Log Added";
					echo " Orders Log Added";
   					}


			$orderDate = $row["order_date"];
			$orderName = $row["user_name"];
			$fName = $row["first_name"];
			$lName = $row["last_name"];
			$orderID = $row["order_id"];
			$userID = $row["user_id"];
			$orderEmail = $row["order_email"];
			$orderAge = $row["user_age"];
			$orderPrio = $row["order_priority"];
			$orderProduct = $row["order_product"];
			$orderSex = $row["pick_sex"];
			$userSex = $row["user_sex"];
			$date1 = $orderDate;
			$date2 =  date("Y-m-d H:i:s");
			$start = new \DateTime($date1);
			$end = new \DateTime($date2);
			$interval = new \DateInterval('PT1H');
			$periods = new \DatePeriod($start, $interval, $end);
			$hours = iterator_count($periods);

			$price = $row["order_price"];
			$bg_email = $row["bg_email"];
			$product_nice = $row["product_nice"];

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
			"hours" => $hours,
			"gender" => $userSex,
			"Pgender" => $orderSex,
			"price" => $price
			];

			$jData = json_encode($data);
			curl_setopt($ch, CURLOPT_URL, 'https://hooks.zapier.com/hooks/catch/4722157/bihdogp/');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_POSTFIELDS, $jData);
			$headers = array();
			$headers[] = 'Content-Type: application/json';
			$headers[] = 'Authorization: Bearer sk_7b8f2be0b4bc56ddf0a3b7a1eed2699d19e3990ebd3aa9e9e5c93815cdcfdc64';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$result = curl_exec($ch);
			$logArray[] =  "Data sent to zapier";
			echo "Data send to zapier";


			
		


			SuperLog($logArray, "complete-orders");
			unset($logArray);

					   

			}echo "<br>";


		} 	// end of loop



	}
	echo "<br><hr>"
?>
