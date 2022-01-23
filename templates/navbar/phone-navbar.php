
<div class="nav-bar-phone">
    <ul>
      <li class="phone-menu-button open-sidebar-menu sidebar-toggle">
        <div class="phone-menu-icon">
        
        <i class="fas fa-bars"></i> <span class="phone-menu-text">Menu</span>
          </div>
      </li>
      <li class="phone-menu-button phone-menu-link <?php if (str_contains($path, 'shop')) {echo 'active';} ?>">
        <div class="phone-menu-icon">
       
        <i class="fas fa-shopping-basket"></i> <span class="phone-menu-text">Shop</span>
          </div>
      </li>
      <li class="phone-menu-button phone-menu-link <?php if (str_contains($path, 'dashboard')) {echo 'active';} ?>">
        <div class="phone-menu-icon">
   
        <i class="fas fa-user"></i>  <span class="phone-menu-text">Dashboard</span>
        </div>
      </li>
    </ul>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="fancy-goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
      <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
    </filter>
  </defs>
</svg>
  </div>
  


<!-- Main Menu Offcanvas Sidebar -->
<nav id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <a class="font-sans-serif" href="#/" style="color:#fff!important;font-weight:600;">
            <img class="me-2" src="/assets/img/logo-1.png" alt="Psychic Artist Logo" width="55">
            <img class="me-2" src="/assets/img/logo-2.png" alt="Psychic Artist Logo Text" width="155">
           
        </a> 
        <button class="sidebar-toggle close-btn float-end text-white" title="Close Menu"><i class="fa fa-times"></i></button>
    </div>

    <ul class="list-unstyled">
        <li><a href="/"><span class="icon"><i class="fas fa-home"></i></span> Home</a></li>
        <li><a href="#shopSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"  data-bs-toggle="collapse" data-bs-target="#shopSubmenu"><span class="icon"><i class="fas fa-shopping-basket"></i></span> Shop</a>
            <ul class="collapse list-unstyled" id="shopSubmenu">
            <a class="dropdown-item" href="<?php echo $v['p1-url']; ?>"><?php echo $v['p1-title']; ?></a>
            <a class="dropdown-item" href="<?php echo $v['p2-url']; ?>"><?php echo $v['p2-title']; ?></a>
            <a class="dropdown-item" href="<?php echo $v['p3-url']; ?>"><?php echo $v['p3-title']; ?></a>
            </ul>
        </li>
        
        <li><a href="#pageSubmenu" aria-expanded="false" class="dropdown-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#pageSubmenu"><span class="icon"><i class="fas fa-file"></i></span>Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><span class="icon"><i class="fas fa-camera"></i></span>Portfolio</a>
        </li>
        <li>
            <a href="#"><span class="icon"><i class="fas fa-mobile-alt"></i></span>Contact Us</a>
        </li>
    </ul>

</nav>
<div class="insert-backdrop" data-bs-toggle="tooltip" data-bs-placement="top" title="Close Menu"></div>
<!-- End of Main Menu Offcanvas sidebar -->

