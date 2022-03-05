<?php
$NotifDisplay = $NotifPop = $NotifDisplayRead = $NotifDisplayUnread = "";
if(isset($_SESSION['userID'])){

// Fetch User ID
$userID = $_SESSION['userID'];


//Grab notifications from DB
$sql = "SELECT * FROM notifications WHERE user_id = '$userID'";
$result = $conn->query($sql);

if($result->num_rows == 0) {
$noNotif = "You don't have any Notifications!";
$NotifCounter = "0";
$NotifEClass = "";
}else{
$noNotif = "";
$NotifEClass = "notification-indicator notification-indicator-danger notification-indicator-fill fa-icon-wait";
$NotifCounter = 0;


//Grab User Details
$sql2 = "SELECT * FROM users WHERE id = '$userID'";
$result2 = $conn->query($sql2);
$row2 = mysqli_fetch_assoc($result2);
        

//Grabbing all notifications, while loop
while($row = $result->fetch_assoc()) {
//Grab Notification Fields

$NotifID = $row['id'];
$NotifEmail = $row2['email'];
$NotifUser = $userID;
$NotifOrder = $row['order_id'];
$NotifUndread = $row['unread'];
$NotifTitle = $row['title'];
$NotifDescription = $row['description'];
$NotifCustom = $row['custom'];
$NotifTime = $row['time'];

if($NotifUndread==1){
    $NotifCounter++;
$NotifDisplayUnread .= <<<EOT
<div class="list-group-item">
<a class="notification notification-flush notification-unread" href="/dashboard/order/$NotifOrder">
<div class="notification-avatar">
<div class="avatar avatar-3xl me-1">
<img class="rounded-circle" src="/assets/img/logo-1.png" alt="">
</div>
</div>
<div class="notification-body">
<p class="mb-1"><b>Order #$NotifOrder:</b> $NotifTitle</p>
<span class="notification-time"> $NotifTime</span>
</div>
</a>
</div>


EOT;

}else{


    $NotifDisplayRead .= <<<EOT
    <div class="list-group-item">
    <a class="notification notification-flush notification" href="/dashboard/order/$NotifOrder">
    <div class="notification-avatar">
    <div class="avatar avatar-3xl me-1">
    <img class="rounded-circle" src="/assets/img/logo-1.png" alt="">
    </div>
    </div>
    <div class="notification-body">
    <p class="mb-1"><b>Order #$NotifOrder:</b> $NotifTitle</p>
    <span class="notification-time"> $NotifTime</span>
    </div>
    </a>
    </div>
    
    
    EOT;


}




$NotifPop .= <<<EOT
<div class="modal fade" id="NotifPop$NotifID" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg mt-6" role="document">
    <div class="modal-content border-0">
      <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
          <h4 class="mb-1" id="staticBackdropLabel">$NotifTitle</h4>
        </div>
        <div class="p-4">
          <div class="row">
            <div class="col-lg-9">
              <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                <div class="flex-1">
                  <h5 class="mb-2 fs-0">Labels</h5>
                  <div class="d-flex"><span class="badge me-1 py-2 badge-soft-success">New</span><span class="badge me-1 py-2 badge-soft-primary">Goal</span><span class="badge me-1 py-2 badge-soft-info">Enhancement</span>
                    <div class="dropdown dropend">
                      <button class="btn btn-sm btn-secondary px-2 fsp-75 bg-400 border-400 dropdown-toggle dropdown-caret-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-plus"></span></button>
                      <div class="dropdown-menu">
                        <h6 class="dropdown-header py-0 px-3 mb-0">Select Label</h6>
                        <div class="dropdown-divider"></div>
                        <div class="px-3">
                          <button class="badge-soft-danger dropdown-item rounded-1 mb-2" type="button">New</button>
                          <button class="badge-soft-primary dropdown-item rounded-1 mb-2" type="button">Goal</button>
                          <button class="badge-soft-info dropdown-item rounded-1 mb-2" type="button">Enhancement</button>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="px-3">
                          <button class="btn btn-sm d-block w-100 btn-outline-secondary border-400">Create Label</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4" />
                </div>
              </div>
              <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                <div class="flex-1">
                  <h5 class="mb-2 fs-0">Description</h5>
                  <p class="text-word-break fs--1">The illustration must match to the contrast of the theme. The illustraion must described the concept of the design. To know more about the theme visit the page. </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


EOT;
    }
}








}else{
$noNotif = "There was a problem fetching your account user ID";

}
?>

<li class="nav-item dropdown nav-notifications btn btn-light p-2 px-lg-3">
	<a class="nav-link p-0 <?php echo $NotifEClass; ?>" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<span class="fas fa-bell" style="font-size: 32px;"></span>
    <?php if($NotifCounter != "0"){ ?>
    <span class="notification-indicator-number"><?php echo $NotifCounter; ?></span>
    <?php } ?>
	</a>
	
	
	
	<div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification" data-bs-popper="none">
		<div class="card card-notification shadow-sm">
		
			<div class="" style="max-height:19rem">
				<div class="os-resize-observer-host observed">
					<div class="os-resize-observer" style="left: 0px; right: auto;"></div>
				</div>
				<div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
					<div class="os-resize-observer"></div>
				</div>
				<div class="os-content-glue" style="margin: 0px; height: 515px; width: 450px;"></div>
				<div class="os-padding">
					<div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
						<div class="os-content" style="padding: 0px; height: auto; width: 100%;">
							<div class="list-group list-group-flush fw-normal fs--1">

                            <div class="card-header">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<p class="fs-1 fw-bold card-header-title mb-0" style="color:#344050;">Notifications</p>
					</div>
					<div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
				</div>
			</div>

                        <?php if($noNotif != ""){ ?>

                        <div class="alert alert-info border-2 d-flex align-items-center" role="alert">
                        <div class="bg-info me-3 icon-item"><span class="fas fa-info-circle text-white fs-3"></span></div>
                        <p class="mb-0 flex-1"><?php echo $noNotif; ?></p>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <?php }else{ ?>

                        <!--- NEW NOTIFICATIONS --->
                        <div class="list-group-title border-bottom">NEW</div>
							
						<?php echo $NotifDisplayUnread; ?>

                        <!--- OLD NOTIFICATIONS --->
						<div class="list-group-title border-bottom">EARLIER</div>
							
                        <?php echo $NotifDisplayRead; ?>


                        <?php } ?>
                        




							    </div>
						</div>
					</div>
				</div>
				<div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
					<div class="os-scrollbar-track os-scrollbar-track-off">
						<div class="os-scrollbar-handle" style="transform: translate(0px, 0px); width: 100%;"></div>
					</div>
				</div>
				<div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
					<div class="os-scrollbar-track os-scrollbar-track-off">
						<div class="os-scrollbar-handle" style="transform: translate(0px, 0px); height: 59.0291%;"></div>
					</div>
				</div>
				<div class="os-scrollbar-corner"></div>
			</div>
			<div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
		</div>
	</div>
</li>






<!---
     <div class="list-group-item">
									<a class="notification notification-flush notification-unread" href="#!">
										<div class="notification-avatar">
											<div class="avatar avatar-3xl me-1">
												<img class="rounded-circle" src="/assets/img/logo-1.png" alt="">
											</div>
										</div>
										<div class="notification-body">
											<p class="mb-1"><strong>Psychic Artist</strong> completed your order: "Soulmate Drawing & Reading"</p>
											<span class="notification-time"><span class="me-2" role="img" aria-label="Emoji"><i class="fa fa-check"></i></span>Just now</span>
										</div>
									</a>
								</div>

-->