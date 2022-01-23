<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-6 left">
                <a href="mailto:contact@psychic-artist.com"><i class="fas fa-envelope" aria-hidden="true"></i> contact@psychic-artist.com</a>
                <!-- Offcanvas menu show button >>>>>>>>> <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3 collapsed" type="button"data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>-->
            </div>
            <div class="col-6 right" style="text-align: end;">
                <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<nav id="pc-menu" class="navbar navbar-light navbar-glass navbar-glass-shadow navbar-top navbar-expand-xl shadow animated-navbar" style="margin:0!important; background-image: none; transition: none 0s ease 0s; background-color: rgba(17, 0, 74, 0);">
    <div class="container" data-layout="container">
        <a class="navbar-brand m-0" href="/" style="margin-right:3rem!important;">
            <div class="d-flex align-items-center">
                <img class="me-2" src="/assets/img/logo-1.png" alt="Psychic Artist Logo" width="55">
                <img class="me-2" src="/assets/img/logo-2.png" alt="Psychic Artist Logo Text" width="155">
            </div>
        </a>
        <div class="collapse navbar-collapse scrollbar" id="navbarStandard" style="flex-grow: 2;">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="/" role="button"><i class="fas fa-home"></i> Home</a></li>
                <!--<li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="/about" role="button"><i class="far fa-address-card"></i> About</a></li>-->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="shop">
                        <i class="fas fa-shopping-basket"></i> Shop</a>
                    <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="shop" style="width:350px;">
                        <div class="bg-white dark__bg-1000 rounded-3 py-2">
                            <a class="dropdown-item link-600 fw-medium" href="<?php echo $v['p1-url']; ?>"><?php echo $v['p1-title']; ?></a>
                            <a class="dropdown-item link-600 fw-medium" href="<?php echo $v['p2-url']; ?>"><?php echo $v['p2-title']; ?></a>
                            <a class="dropdown-item link-600 fw-medium" href="<?php echo $v['p3-url']; ?>"><?php echo $v['p3-title']; ?></a>
                        </div>
                    </div>
                </li>
                <!--<li class="nav-item" style="margin-right: 20px;"><a class="nav-link" href="/support" role="button"><i class="far fa-life-ring"></i> Support</a></li>-->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/support/" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="support">
                        <i class="far fa-life-ring"></i> Support</a>
                    <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="support" style="width:250px;">
                        <div class="bg-white dark__bg-1000 rounded-3 py-2">
                            <a class="dropdown-item link-600 fw-medium" href="/contact">Contact Us</a>
                            <a class="dropdown-item link-600 fw-medium" href="/order-status">Order Status</a>
                            <a class="dropdown-item link-600 fw-medium" href="/faq">FAQ</a>
                        </div>
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
                    </div>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row"> <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/templates/navbar/navbar-notification.php'; ?> <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/templates/navbar/navbar-user.php'; ?> </ul>
    </div>
</nav>
<nav id="phone-menu" class="navbar navbar-expand-sm navbar-light bg-primary flex-sm-nowrap flex-wrap animated-navbar ">
    <div class="container-fluid" style="padding:0!important;">
        <button class="navbar-toggler flex-grow-sm-1 flex-grow-0 me-2 sidebar-toggle" type="button">
            <i class="fa fa-bars" style="color:#fff!important;font-size:130%;"></i>
        </button>
        <span class="navbar-brand flex-grow-1">
            <img class="me-2" src="/assets/img/logo-1.png" alt="Psychic Artist Logo" width="55">
            <img class="me-2" src="/assets/img/logo-2.png" alt="Psychic Artist Logo Text" width="155">
        </span>
        <div class="flex-grow-1">
            <!--spacer-->
        </div>
    </div>
</nav>