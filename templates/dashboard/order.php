

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
    

?>
<img class="img-thumbnail d-block mx-auto mb-2 mt-2" src="<?php echo $drawing; ?>" alt="Drawing" />
<p><?php echo $generalOrderHeader."<br><br>"; echo nl2br($reading); echo "<br><br>".$generalOrderFooter;?></p>
        <?php
        }}
        ?>