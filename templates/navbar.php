
<nav class="navbar navbar-light navbar-glass navbar-glass-shadow navbar-top navbar-expand-xl"data-navbar-darken-on-scroll="data-navbar-darken-on-scroll" style="margin:0!important; background-image: none; transition: none 0s ease 0s; background-color: rgba(17, 0, 74, 0);">
<div class="container" data-layout="container">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-0 me-md-5" href="/">
            <div class="d-flex align-items-center">
            <img class="me-2" src="/assets/img/logo-1.png" alt="Psychic Artist Logo" width="55">
            <span class="font-sans-serif" style="color:#fff!important;font-weight:600;">Psychic Artist</span></div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard" style="flex-grow: 2;">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="/" role="button"><i class="fas fa-home"></i> Home</a></li>
            <!--<li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="/about" role="button"><i class="far fa-address-card"></i> About</a></li>-->
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="shop"><i class="fas fa-shopping-basket"></i> Shop</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="shop" style="width:350px;">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo $v['p1-url']; ?>"><?php echo $v['p1-title']; ?></a>
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo $v['p2-url']; ?>"><?php echo $v['p2-title']; ?></a>
                    <a class="dropdown-item link-600 fw-medium" href="<?php echo $v['p3-url']; ?>"><?php echo $v['p3-title']; ?></a>

                </div>
            </li>
            
            <!--<li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="/support" role="button"><i class="far fa-life-ring"></i> Support</a></li>-->
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/support/" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="support"><i class="far fa-life-ring"></i> Support</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="support" style="width:250px;">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                  <a class="dropdown-item link-600 fw-medium" href="/contact">Contact Us</a>
                    <a class="dropdown-item link-600 fw-medium" href="/order-status">Order Status</a>
                    <a class="dropdown-item link-600 fw-medium" href="/faq">FAQ</a>
                    

                </div>
            </li>  
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/legal/" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="legal"><i class="fas fa-gavel"></i> Legal</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="legal" style="width:250px;">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                  <a class="dropdown-item link-600 fw-medium" href="/tos">Terms of Service</a>
                    <a class="dropdown-item link-600 fw-medium" href="/privacy">Order Status</a>
                    <a class="dropdown-item link-600 fw-medium" href="/dmca">DMCA</a>
                    <a class="dropdown-item link-600 fw-medium" href="/refund">Refund Policy</a>
                    <a class="dropdown-item link-600 fw-medium" href="/facebook-policy">Facebook Policy</a>
                    

                </div>
            </li> 
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            
          <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/templates/navbar-notification.php'; ?>  
        
          <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/templates/navbar-user.php'; ?>
          </ul>
                            </div>
        </nav>
                        