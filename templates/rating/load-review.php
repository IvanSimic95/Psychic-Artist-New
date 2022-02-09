<?php

function time_ago($timestamp)  
 {  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60)  
      {  
     return "Just Now";  
   }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
       return "one minute ago";  
     }  
     else  
           {  
       return "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
       return "an hour ago";  
     }  
           else  
           {  
       return "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
       return "yesterday";  
     }  
           else  
           {  
       return "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       return "a week ago";  
     }  
           else  
           {  
       return "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       return "a month ago";  
     }  
           else  
           {  
       return "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       return "one year ago";  
     }  
           else  
           {  
       return "$years years ago";  
     }  
   }  
 }  
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/config.php';
if(isset($_GET['page'])) {
    $page = $_GET['page'];
    }else{
    $page = "0";	
    }
    if(isset($_GET['product'])) {
    $productID = $_GET['product'];
    }else{
    $productID = "1";	
    }

$perpage = 5;
$offset = ($page-1) * $perpage; 
	
$offset = $offset + 10;

$total_pages_sql = "SELECT COUNT(*) FROM reviews WHERE product_id = '".$productID."'";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_rows = $total_rows - 10;
$total_pages = ceil($total_rows / $perpage);

$nextpage = $page + 1;

    $sql = "SELECT * FROM reviews WHERE review_moderated = 'approved' AND product_id = '".$productID."' ORDER BY review_date DESC LIMIT ".$offset.", ".$perpage;

    $result = $conn->query($sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);
	$count = $result->num_rows;
    if($result->num_rows != 0) {

      while($row = $result->fetch_assoc()) {
         // echo '<div class="single_review sides"><div class="review_content"><h3><span class="review-name">' . $row["review_name"]. '</span> <span class="verified-badge"><i class="fas fa-user-check"></i> Verfied Purchase</span><time>' . $row["review_date"]. '</time> ago</h3><div class="rating">' . $row["review_rating"]. '</div><div class="testimonial">' . $row["review_text"]. '</div></div></div>';
        $newdate = date('F jS, Y, H:i:s', strtotime($row["review_date"]));
        $time = time_ago($row["review_date"]);
        $roundRating = round($row["review_rating"]);
        $ratingStars = "";

        foreach(range(1,$roundRating) as $index) {
        $ratingStars .= '<i class="fa fa-star"></i>';
         }


        echo '
        <div class="card mb-3 shadow-none item" style="border: 1px solid #dee2e6 !important;">
                        <div class="card-body p-3">
                            <div class="d-flex mb-3 pb-1 border-bottom flex-wrap">
                                <img src="https://avatars.dicebear.com/api/adventurer/' . $row["review_name"]. '.svg" class="review-avatar avatar rounded" alt="' . $row["review_name"]. 'Avatar">
                                <div class="flex-fill ms-1 text-truncate">
                                    <h6 class="mb-0 fs-1 fw-semibold"><span>' . $row["review_name"]. '</span></h6>
                                    <span class="text-muted">' .$time. '</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="mb-1 me-1 ">
                                    ' . $ratingStars. '
                                      <!--  <i class="fa fa-star text-warning fs--1"></i>
                                        <i class="fa fa-star text-warning fs--1"></i>
                                        <i class="fa fa-star text-warning fs--1"></i>
                                        <i class="fa fa-star text-warning fs--1"></i>
                                        <i class="fa fa-star text-warning fs--1"></i> -->
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-item-post">
                                <p>' . $row["review_text"]. '</p>
                            </div>
                        </div>
                    </div>
        ';
		
		}






    } else {
        echo "No Reviews";
    }
      $conn->close();
	  
	  if($page != $total_pages){
     ?>
	 
	 <div class="pagination">
    <a href="https://<?php echo $domain; ?>/templates/rating/load-review.php?product=<?php echo $productID; ?>&page=<?php echo $nextpage; ?>" class="next">Next</a>
</div>
<?php
} ?>