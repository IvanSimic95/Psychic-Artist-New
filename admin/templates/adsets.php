<?php


        $sql = "SELECT * FROM orders WHERE (order_status = 'completed' AND fbCampaign = '$campaign') OR (order_status = 'processing' AND fbCampaign = '$campaign') GROUP BY fbAdset ORDER BY order_id DESC";
        $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                         echo "no results";
                } else {
                         //Find campaign name from FB
                         $ch = curl_init();
                         curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v13.0/23850420276030189/adsets?fields=name&access_token='.$FBToken);
                         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                         $r = curl_exec($ch);
                         if (curl_errno($ch)) {echo 'Error:' . curl_error($ch);}
                         curl_close($ch);
                         $y = json_decode($r, true);
                         
                        while ($row = $result->fetch_assoc()) {
                        $id = $row["fbAdset"];
                               
                        if($id == "domain_click" OR $id == "{{adset.id}}" OR $id == "" OR $id == "0"){
                        }else{

                                      
                                     
                                    

                                      $n = $y['data'];
                                      for ($i = 0; $i < count($n); $i++) {
                                             if ($n[$i]['id'] == $id){
                                              $key = $i;
                                             }
                                           
                                      }
                                      $name = $n[$key]['name'];

                                        //Find campaign Sales Count from DB
                                        $sql4 = "SELECT * FROM orders WHERE (order_status = 'completed' AND fbCampaign = '$campaign' AND fbAdset = '$id' AND DATE(order_date) >= '$startDate' AND DATE(order_date) <= '$endDate') OR (order_status = 'processing' AND fbCampaign = '$campaign' AND fbAdset = '$id' AND DATE(order_date) >= '$startDate' AND DATE(order_date) <= '$endDate')";
                                        $r4 = $conn->query($sql4);
                                        $countSales = $r4->num_rows;
                                  

                                        //Find campaign Sales from DB
                                        $sql3 = "SELECT SUM(order_price) AS sum_quantity FROM orders WHERE (order_status = 'completed' AND fbCampaign = '$campaign' AND fbAdset = '$id' AND DATE(order_date) >= '$startDate' AND DATE(order_date) <= '$endDate') OR (order_status = 'processing' AND fbCampaign = '$campaign' AND fbAdset = '$id' AND DATE(order_date) >= '$startDate' AND DATE(order_date) <= '$endDate')";
                                        $r3 = $conn->query($sql3);
                                        $fetch3 = $r3->fetch_assoc();
                                        $sum = $fetch3['sum_quantity'];
                                        if($sum > 0){
                                        $sum = $sum * 0.84;
                                        $sum = round($sum);
                                        
                                        }else{
                                        $sum = 0;
                                        }

                                        echo '<tr id="' . $id . '">
                                        <td><a href="ads.php?c='.$campaign.'&cname='.$campaignName.'&a='.$id.'&sdate='.$startDate.'&edate='.$endDate.'">' . $id . '</a></td>
                                        <td>' . $name . '</td>
                                        <td>' . $countSales. '</td>
                                        <td>' . $sum. '</td>
                                        </tr>
                                        ';
                             
                                }
                       
                        }
                        $conn->close();
                }
?>