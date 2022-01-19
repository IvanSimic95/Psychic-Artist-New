
<style>
  .close-btn {
    position: fixed;
    right: 20px;
    top: 20px;
    font-size: 15px;
    font-weight: normal;
    border: none!important;
    padding: 3px 5px;
    cursor: pointer;
    outline: none;
    background-color:transparent;
    line-height: 10px;
}
  .show-sidebar {
  transform: translate(0)!important;

}
.sidebar {
    z-index: 1999;
    overflow-y: auto;
    background: #373f50;
 
    position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: translate(-100%);


  -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
#sidebar .sidebar-header a {
    color: #fff;
    display: block;
    text-decoration: none;
    font-weight: bold;
    letter-spacing: 3px;
    padding: 5px 0px;
}
#sidebar .sidebar-header {
    background: linear-gradient(90deg,#d130eb,#4a30eb 80%,#2b216c);
    font-size: 20px;
    line-height: 52px;
    text-align: center;
}
#sidebar ul li a {
    padding: 15px 10px;
    font-size: 17px;
    display: block;
    color: #fff;
    border-bottom: 1px solid #939fa5;
    text-decoration: none;
    transition: 0.4s;

}

#sidebar ul li a:hover {
    color: #263238;
    background: #fff;
}
#sidebar ul ul a {
    font-size: 16px !important;
    padding-left: 30px !important;
    background: #263238;
}
a.dropdown-toggle.collapsed.dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 5px;
    vertical-align: 5px;
    content: "";
    border-bottom: 5px solid;
    border-right: 5px solid transparent;
    border-top: 0;
    float: right;
    margin-top: 10px;
}
#sidebar .dropdown-toggle::after {
    float: right;
    margin-top: 10px;
}
#sidebar .icon {
    padding-right: 15px;
}
@media screen and (min-width: 676px) {
  #sidebar {
    width: 400px;
  }
}
</style>

<nav id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <a class="font-sans-serif" href="/" style="color:#fff!important;font-weight:600;">Psychic Artist</a> 
        <button class="sidebar-toggle close-btn float-end text-white"><i class="fa fa-times"></i></button>
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

<script>
const toggleBtn =document.querySelector('.sidebar-toggle');
const closeBtn =document.querySelector('.close-btn');
const sidebar =document.querySelector('.sidebar');

toggleBtn.addEventListener('click', function(){
    // using add and remove class
    
    /*
    if(sidebar.classList.contains('show-sidebar')){
        sidebar.classList.remove('show-sidebar');
    }else{
        sidebar.classList.add('.show-sidebar');
    }
    */

    //using toggle
    sidebar.classList.toggle('show-sidebar');
});

closeBtn.addEventListener('click', function(){
    sidebar.classList.remove('show-sidebar');
});
</script>