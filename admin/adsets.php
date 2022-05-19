<?php
$pagetitle = "Facebook Ads";
$pagefile = "ads.php";


$todaysDate = date("Y-m-d");
$date = $todaysDate;

$startDate = "$date";
$endDate = "$date";
$campaign = "";
$campaignName = "";

if(isset($_GET['sdate'])){
$startDate = $_GET['sdate'];
}

if(isset($_GET['edate'])){
$endDate = $_GET['edate'];
}

if(isset($_GET['c'])){
$campaign = $_GET['c'];
}

if(isset($_GET['cname'])){
$campaignName = $_GET['cname'];
}
    

?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/admin/templates/auth.php'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/admin/templates/head.php'; ?>

<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-center">
            

        <span style="float:left;">
                    <h4> <i class="fas fa-table me-1"></i>
                    Campaigns</h4>
</span>


                    <span style="float:right;"> 
                    <form class="form-inline" action="" method="get">
<div class="input-group">
<input type="text" name="sdate" class="form-control" id="sdate" value="<?php echo $startDate; ?>">
<input type="text" name="edate" class="form-control" id="edate" placeholder="End Date" value="<?php echo $endDate; ?>">
<input type="hidden" name="c" class="form-control" id="c" value="<?php echo $campaign; ?>">
<input type="hidden" name="cname" class="form-control" id="c" value="<?php echo $campaignName; ?>">
  <button class="btn btn-outline-secondary show-orders" type="submit">Save!</button>
</div></form>
</span>
        </div>
    </div>

    <div class="card-body p-0">
    <table id="datatablesSimple" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Sales Count</th>
                                <th>Sales in $</th>
                            
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            
                        include_once $_SERVER['DOCUMENT_ROOT'].'/admin/templates/adsets.php';
                        ?>

                        </tbody>
                        <tfoot>
                            <tr>
                            <th>ID</th>
                                <th>Name</th>
                                <th>Sales Count</th>
                                <th>Sales in $</th>
                            </tr>
                        </tfoot>
                    </table>
    </div>
    <div class="card-footer small text-muted"><i class="fa fa-clock" style="margin-right:5px;"></i>From: <?php echo $startDate; ?> - <?php echo $endDate; ?></div>
</div>
        
     
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/admin/templates/footer.php'; ?>