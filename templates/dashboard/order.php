

<?php
$title = "Order #".$viewOrder; 
$sql = "SELECT * FROM orders WHERE order_id = '$viewOrder'";
$result = $conn->query($sql);


if($result->num_rows == 0) {
    $errorDisplay = "Unknown order or you don't have access to it!";
    include $_SERVER['DOCUMENT_ROOT'].'/templates/error/view-order.php'; 
    }else{

        $row = mysqli_fetch_assoc($result);        
    $id = $row['order_id'];
    $status = $row['order_status'];
    $orderTIme = $row['order_date'];
    $price = $row['order_price'];
    
    $fName = $row['first_name'];
    $lName = $row['last_name'];
    $age = $row['user_age'];
    $email = $row['order_email'];
    
    $drawing = $row['drawing'];
    $reading = $row['reading'];
  

    if($_SESSION['email'] != $email){
        $errorDisplay = "Unknown order or you don't have access to it!";
        include $_SERVER['DOCUMENT_ROOT'].'/templates/error/view-order.php'; 
    }else{
        include $_SERVER['DOCUMENT_ROOT'].'/templates/progress.php'; 
        echo $statusProgress;
    
if($status == "completed"){
?>
<img class="img-thumbnail d-block mx-auto mb-2 mt-2" src="<?php echo $drawing; ?>" alt="Drawing" />
<p><?php echo nl2br($reading);?></p>
        <?php
        }else{
            ?>
<p class="h3 text-center mt-2 mb-3">Order Status: <span style="text-transform:capitalize;"><?php echo $status; ?></span></p>
<p class="h6 text-center mb-2">Once order status is completed you will be able to see your order reading and/or drawing!</p>

<span title="Drawing is not ready yet, processing!" class="placeholder-glow placeholder img-thumbnail d-block mx-auto mb-2 rounded-3" style="height:600px;"></span>
<p class="card-title placeholder-glow"><span class="placeholder col-6"></span></p>
<p class="card-text placeholder-glow">
<span class="d-block placeholder mb-2 col-10"></span>
<span class="d-block placeholder mb-2 col-9"></span>
<span class="d-block placeholder mb-2 col-12"></span>
<span class="d-block placeholder mb-2 col-11"></span>
<span class="d-block placeholder mb-2 col-9"></span>
<span class="d-block placeholder mb-2 col-8"></span>
<span class="d-block placeholder mb-2 col-9"></span>
<span class="d-block placeholder mb-2 col-8"></span>
<span class="d-block placeholder mb-2 col-12"></span>
<span class="d-block placeholder mb-2 col-8"></span>
<span class="d-block placeholder mb-2 col-9"></span>
<span class="d-block placeholder mb-2 col-10"></span>
<span class="d-block placeholder mb-2 col-9"></span>
<span class="d-block placeholder mb-2 col-11"></span>
<span class="d-block placeholder mb-2 col-12"></span>
<span class="d-block placeholder mb-2 col-8"></span>
</p>
   

    <?php
        }
    }
    }
        ?>