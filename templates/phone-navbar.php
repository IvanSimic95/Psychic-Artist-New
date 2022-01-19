
<div class="nav-bar-phone">
    <ul>
      <li class="active">
        <div>
        
        <i class="fas fa-home"></i> <span>Home</span>
          </div>
      </li>
      <li>
        <div>
       
        <i class="fas fa-home"></i> <span>Shop</span>
          </div>
      </li>
      <li>
        <div>
         
        <i class="fas fa-home"></i> <span>Support</span>
        </div>
      </li>
      <li>
        <div>
   
        <i class="fas fa-home"></i>  <span>Account</span>
        </div>
      </li>
    </ul>
  </div>
  
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="old-goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
      <feBlend in="SourceGraphic" in2="goo" />
    </filter>
    <filter id="fancy-goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
      <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
    </filter>
  </defs>
</svg>

<style>
.container-phone{
  max-width: 40rem;
  margin: 0 auto;
  background: linear-gradient(to top right, #f01d39, #fa2d6e);
  height: 34rem;
  border-radius: 0 0 50px 50px;
  overflow: hidden;
  position: relative;
  box-shadow: 0 20px 35px 0 rgba(240, 29, 57, 0.5);
}

.nav-bar-phone{
  background: #fff;
  width: 100%;
  height: 7rem;
  position: fixed;
  left: 0;
  bottom: 0;
  filter: url("#fancy-goo");
  z-index:2999;
}

.nav-bar-phone svg{
  height: 3rem;
  margin-bottom: 4px;
  position: relative;
  z-index: 10;
  transition: all .4s;
  display: inline-block;
}

.nav-bar-phone ul{
  display: flex;
  height: 100%;
}

.nav-bar-phone ul li{
  height: 100%;
  text-align: center;
  list-style: none;
  align-items: center;
  display: flex;
  cursor: pointer;
  justify-content: center;
  flex-wrap: wrap;
  position: relative;
  flex: 1;
}

.nav-bar-phone ul li span{
  font-weight: 600;
  width: 100%;
  display: block;
  text-align: center;
  transition: all .22s;
}

.nav-bar-phone ul li:after{
  width: 50%;
  height: 50%;
  border-radius: 100%;
  content: '';
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 0;
  z-index: 0;
  position: absolute;
  background: #fff;
  transition: all .4s;
}

.nav-bar-phone ul li:hover:after{
  transform: translate3d(0, -15%, 0);
}

.nav-bar-phone ul li.active:after{
  transform: translate3d(0, -40%, 0);
}

.nav-bar-phone ul li.active span,
.nav-bar-phone ul li:hover span{
  color: #f01d39;
}

.nav-bar-phone ul li svg{
  transform: scale(1.5);
}

.nav-bar-phone ul li.active svg{
  transform: scale(2) translate3d(0, 0px, 0);
}

.nav-bar-phone ul li:not(.active):hover svg{
  transform: scale(1.8) translate3d(0, -4px, 0);
}

.nav-bar-phone ul li svg path{
  transition: all .4s;
}

.nav-bar-phone ul li:hover svg path,
.nav-bar-phone ul li.active svg path{
  fill: #f01d39;
}

@media screen and (max-width: 400px){
  .nav-bar-phone svg{
    height: 1.5rem;
  }
  
  .nav-bar-phone ul li span{
    font-size: .75rem;
    font-weight: 500;
  }  
  
  .nav-bar-phone ul li.active:after{
    transform: translate3d(0, -25%, 0);
  }
}
</style>

<script>
let menuItems = document.querySelectorAll('.nav-bar-phone ul li');

const navItemClick = function(el) {
  let element = this;
  
  menuItems.forEach(item => {
    item.classList.remove('active');
  });

  element.classList.add('active');
}

menuItems.forEach(item => {
  item.addEventListener('click', navItemClick);
});
</script>