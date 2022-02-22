<?php
$CreatedAt = time();
 //CODE TO START ABANDONED CART PROCESS
 $ch = curl_init();
 $data = [
 "user_id" => "666",
 "action" => "Cart Abandoned",
 "email" => "email@isimic.com",
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
 if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    echo $result;
?>