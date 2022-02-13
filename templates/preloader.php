<style>
.preloader{ 
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  text-align: center;
  z-index: 9999999;
  -webkit-transition: .9s;
  transition: .9s;
  background-color:#222;
}


.loader {
    height: 200px;
    width: 200px;
    background-image: linear-gradient(to right top, #FB0712, #124FEB);
    border-radius: 50%;
    position: relative;
    animation: rotate 2s infinite;
    transition: all 2s;
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 45%;
}
.loader-activate {
    visibility: visible;
}
.loader-deactivate{ 
    visibility: hidden;
}

@keyframes rotate {
    0% {
        transform: rotate(0deg);
        background-image: linear-gradient(to right top, #FB0712, #124FEB)
    }

    100% {
        transform: rotate(360deg);
        background-image: linear-gradient(to right top, #FB0712, #124FEB)
    }
}

.loader:after {
    content: '';
    position: absolute;
    background-color: #222;
    width: 190px;
    height: 190px;
    top: 10px;
    left:0px;
    border-radius: 50%
}
</style>
<noscript>
<style>
.preloader { display: none;  visibility: hidden; }</style>
</noscript>
<div class="preloader">
    <div class="loader"></div>
</div>
