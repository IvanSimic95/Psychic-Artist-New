<style>

#sidebar-menu {
    padding: 0;
    border-radius: 10px
}
#sidebar-menu a{
    color:#fff;
}

#sidebar-menu .h4 {
    font-weight: 500;
    padding-left: 15px
}

#sidebar-menu ul {
    list-style: none;
    margin: 0;
    padding-left: 0rem
}

#sidebar-menu ul li {
    padding: 10px 0;
    display: block;
    padding-left: 1rem;
    padding-right: 1rem;
    border-left: 5px solid transparent;
    text-align:left;
}

#sidebar-menu ul li.active {
    border-left: 5px solid #fff;
    background-color: #22222280
}

#sidebar-menu ul li a {
    display: block
}

#sidebar-menu ul li a .fas,
#sidebar-menu ul li a .far {
    color: #ddd
}

#sidebar-menu ul li a .link {
    color: #fff;
    font-weight: 500
}

#sidebar-menu ul li a .link-desc {
    font-size: 0.8rem;
    color: #ddd
}

</style>
<?php
  $page = "overview";
  $r = $_SERVER['REQUEST_URI'];
  $firephp->fb($r,FirePHP::LOG);
  $superSplitURL = explode('/',$r);
  $superCount = count($superSplitURL);
  if($superCount === 2) $superSplitURL['2'] = "overview";
  if($superCount === 3) $page = $superSplitURL['2'];
  $firephp->fb($superCount,FirePHP::LOG);

          if($superSplitURL['0']=="dashboard"){
            $page = "overview";
            if($superSplitURL['1']=="order"){
                    $page = "order";
                }else{
                    $page = $superSplitURL['1'];
                }
                

          }elseif($superSplitURL['1']=="dashboard"){
            $page = "overview";
            if($superSplitURL['2']=="order"){
                    $page = "order";
                }else{
                    $page = $superSplitURL['2'];
                }
            
        }else{
        $page = "overview";
    }
    
    $firephp->fb($page,FirePHP::LOG);

?>
<div id="sidebar-menu" class="text-white">
<ul>

                    <li <?php if($page=="overview"){ ?>class="active" <?php } ?>> <a href="/dashboard" class="text-decoration-none d-flex align-items-start">
                            <div class="fas fa-box pt-2 me-3"></div>
                            <div class="d-flex flex-column">
                                <div class="link">My Account</div>
                                <div class="link-desc">Your Account Overview</div>
                            </div>
                        </a> </li>
                    <li <?php if($page=="order" OR $page=="orders"){ ?>class="active" <?php } ?>> <a href="/dashboard/orders" class="text-decoration-none d-flex align-items-start">
                            <div class="fas fa-box-open pt-2 me-3"></div>
                            <div class="d-flex flex-column">
                                <div class="link">My Orders 
                            <?php 
                                if(isset($_SESSION['loggedIn'])){ 
                                    if($_SESSION['loggedIn']=="yes"){
                                        echo "(".$_SESSION['orders'].")"; 
                                    }
                                }
                            ?> </div>
                                <div class="link-desc">View & Manage Orders</div>
                            </div>
                        </a> </li>
                    <li <?php if($page=="profile"){ ?>class="active" <?php } ?>> <a href="/dashboard/profile" class="text-decoration-none d-flex align-items-start">
                            <div class="fa fa-user-pen pt-2 me-3"></div>
                            <div class="d-flex flex-column">
                                <div class="link">My Profile</div>
                                <div class="link-desc">Change your profile details</div>
                            </div>
                        </a> </li>
                    <li> <a href="/dashboard?logout=yes" class="text-decoration-none d-flex align-items-start">
                            <div class="fa fa-right-from-bracket pt-2 me-3"></div>
                            <div class="d-flex flex-column">
                                <div class="link">Logout</div>
                                <div class="link-desc">All done? Click here to sign out!</div>
                            </div>
                        </a> </li>
</ul>