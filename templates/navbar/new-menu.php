<header class="globalNav noDropdownTransition">

  <div class="container-lg">
    <ul class="navRoot">

      <li class="navSection logo">
        <a class="rootLink item-home colorize" href="/">
             <img src="/assets/img/logo-1.svg" alt="Psychic Artist Logo #1"> 
             <img src="/assets/img/logo-2.svg" alt="Psychic Artist Logo #2"> 
        </a>
      </li>

      <li class="navSection primary">
        <a href="/" class="rootLink"><i class="fas fa-home"></i> Home</a>

        <a href="#!" class="rootLink item-products hasDropdown colorize" data-dropdown="products">
        <i class="fas fa-shopping-basket"></i> Products
        </a>
        <a href="#!" class="rootLink item-developers hasDropdown colorize" data-dropdown="support">
        <i class="fas fa-life-ring"></i> Support
        </a>
        <a href="#!" class="rootLink item-company hasDropdown colorize" data-dropdown="company">
        <i class="fa fa-gavel"></i> Legal
        </a>
      </li>

      <li class="navSection secondary">
        
        <a class="rootLink item-dashboard colorize" data-adroll-segment="submit_two" href="/dashboard">
          <?php if(isset($_SESSION['id'])){echo $userName;}else{echo "Sign In";} ?>
        </a>

      </li>

      <li id="phoneRootLink" class="navSection mobile">
        <a id="togglePhoneLink" class="rootLink item-mobileMenu colorize">
          <h2>Menu</h2>
        </a>
        <div class="popup">
          <div class="popupContainer">
            <a class="popupCloseButton">Close</a>
            <div class="mobileProducts">
              <h4>Products</h4>
              <div class="mobileProductsList">
                <ul>
                  <li><a class="linkContainer item-payments" href="/shop/soulmate">
                      <svg viewBox="0 0 48 48">
                        <path fill="#87BBFD" class="hover-fillLight" d="M24 48C12.11 48 2.244 39.35.338 28H6.5V9H5.27C9.67 3.515 16.423 0 24 0c13.255 0 24 10.745 24 24S37.255 48 24 48z"></path>
                        <path fill="#555ABF" class="hover-fillDark" d="M25 21v8H.526A24.082 24.082 0 0 1 0 24 23.908 23.908 0 0 1 6.116 8H31.5c.828 0 1.5.67 1.5 1.5V21h-8zm-10.502-8.995a6.497 6.497 0 1 0 0 12.994 6.497 6.497 0 0 0 0-12.996z"></path>
                        <path fill="#FFF" d="M39.823 39.276a2.44 2.44 0 0 1-1.76.724H16.5a1.5 1.5 0 0 1-1.5-1.5v-18c0-.828.67-1.5 1.5-1.5h27.693a1.51 1.51 0 0 1 1.484 1.256c.21 1.217.323 2.467.323 3.744 0 5.936-2.355 11.32-6.177 15.276zM33.5 23.002a6.497 6.497 0 1 0 0 12.995 6.497 6.497 0 0 0 .002-12.994z"></path>
                      </svg>Soulmate Drawing
                    </a></li>
                  <li><a class="linkContainer item-subscriptions" href="/shop/twin-flame">
                      <svg viewBox="0 0 48 48">
                        <path fill="#74E4A2" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"></path>
                        <path fill="#FFF" d="M39.558 30.977c-6.23 6.225-16.304 6.194-22.535-.03l13.975-13.962c-6.232-6.224-16.335-6.224-22.567 0-4.043 4.04-5.456 9.712-4.247 14.896l-.654.174a21.89 21.89 0 0 1-1.536-8.61c.284-11.806 10.003-21.35 21.823-21.446 6.15-.05 11.72 2.42 15.744 6.438 6.23 6.226 6.23 16.318 0 22.542z"></path>
                        <path fill="#159570" class="hover-fillDark" d="M33.653 21.413c1.43 5.336-1.735 10.82-7.068 12.25-5.332 1.43-10.814-1.736-12.242-7.072-1.43-5.334 1.735-10.82 7.068-12.25 5.334-1.43 10.815 1.738 12.244 7.074z"></path>
                      </svg>Twin Flame Drawing
                    </a></li>
                  <li><a class="linkContainer item-connect" href="/shop/future-spouse">
                      <svg viewBox="0 0 48 48">
                        <path fill="#68D4F8" class="hover-fillLight" d="M48 24c0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0c1.363 0 2.698.12 4 .338V15h5v5h14.662c.218 1.302.338 2.637.338 4z"></path>
                        <path fill="#FFF" d="M16.99 29.966L17 17l-5.55-.006a1.02 1.02 0 0 0-.725.3L2.65 25.446a1.55 1.55 0 0 0-.44 1.28c1.22 9.944 9.1 17.825 19.042 19.047.472.058.945-.104 1.28-.44l8.172-8.076c.192-.193.3-.453.3-.725L31 31l-12.985-.01a1.023 1.023 0 0 1-1.024-1.024z"></path>
                        <path fill="#217AB7" class="hover-fillDark" d="M47.697 20.195L37.194 30.702a1.03 1.03 0 0 1-.726.3h-5.462V18.03c0-.567-.46-1.025-1.025-1.025H16.994V11.52c0-.274.108-.534.3-.726L27.783.3C38 1.916 46.07 9.98 47.698 20.194z"></path>
                      </svg>Future Spouse Drawing
                    </a></li>
                </ul>
                <ul>
                  <!--
                  <li><a class="linkContainer item-relay" href="https://stripe.com/relay">
                      <svg viewBox="0 0 48 48">
                        <path fill="#FFA27B" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"></path>
                        <path fill="#C23D4B" class="hover-fillDark" d="M24 12.5c8.285 0 15 6.828 15 15.25S32.285 43 24 43c-8.284 0-15-6.828-15-15.25S15.716 12.5 24 12.5z"></path>
                        <path fill="#FFF" d="M25 38.925v6.288a.787.787 0 0 1-.788.787h-.424a.787.787 0 0 1-.788-.788v-6.287c-3.668-.49-6.5-3.623-6.5-7.425a7.5 7.5 0 0 1 15 0c0 3.802-2.832 6.935-6.5 7.425z"></path>
                      </svg>Relay
                    </a></li>
                  <li><a class="linkContainer item-atlas" href="https://stripe.com/atlas">
                      <svg viewBox="0 0 48 48">
                        <path fill="#FCD669" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"></path>
                        <path fill="#CE7C3A" class="hover-fillDark" d="M24.012 1.834c.366.005.73.196.92.575l16.825 33.72c.396.79-.314 1.685-1.175 1.48L24 33.626V1.834h.01z"></path>
                        <path fill="#FFF" d="M24 1.834v31.794l-16.584 3.98A1.043 1.043 0 0 1 6.24 36.13L23.067 2.41c.195-.39.572-.58.947-.576H24z"></path>
                      </svg>Atlas
                    </a></li>
-->

                  <li><a class="linkContainer item-radar" href="/shop/past-life">
                      <svg viewBox="0 0 48 48">
                        <path class="hover-fillLight" fill="#F6A4EB" d="M41.364 21.886h6.538c.06.697.098 1.4.098 2.114 0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0c6.833 0 12.993 2.86 17.364 7.442v14.444z"></path>
                        <path fill="#FFF" d="M37.746 37.4a1.3 1.3 0 0 1 .92-.38c.72 0 1.303.444 1.303 1.163 0 .503-.353.982-.708 1.292-3.484 3.122-8.325 5.53-13.783 5.53-11.75 0-19.486-9.538-19.486-18.83 0-8.72 7.195-16.19 15.25-16.19s11.227 5.54 11.227 5.54L37.747 37.4z"></path>
                        <path class="hover-fillDark" fill="#9251AC" d="M47.995 24zm0 0c0-.995-.807-1.974-1.802-1.974-1.15 0-1.8.94-1.8 1.83-.09 3.174-1.228 7.127-3.453 10.182-2.355 3.232-6.91 6.956-13.242 6.956-7.625 0-13.213-5.767-13.213-11.925 0-4.3 2.886-7.17 5.828-7.17 1.588 0 2.48.683 2.965 1.312.362.468 1.063.493 1.482.074L40.968 7.032A23.926 23.926 0 0 1 47.995 24z"></path>
                      </svg>Past Life Drawing
                      <span class="new-badge">New</span>
                    </a></li>
                </ul>
              </div>
            </div>
            <div class="mobileSecondaryNav">
              <ul>
                <li>
                  <a class="item-pricing" href="/" data-analytics-action="pricing" data-action-source="mobile-nav">
                    Home
                  </a>
                </li>
                <li><a class="item-workswith" href="/support/contact">Contact Us</a></li>
                <li><a class="item-gallery" href="/support/order-status">Order Status</a></li>
                <li><a class="item-documentation" href="/support/faq">FAQ</a></li>
              </ul>
              <ul>
                <li><a class="item-about" href="/legal/terms-of-service">Terms of Service</a></li>
                <li><a class="item-jobs" href="/legal/privacy-policy">Privacy Policy</a></li>
                <li><a class="item-blog" href="/legal/refund-policy">Refund Policy</a></li>
              </ul>
            </div>
            <a class="mobileSignIn" data-adroll-segment="submit_two" href="/dashboard"><?php if(isset($_SESSION['id'])){echo $userName;}else{echo "Sign In";} ?></a>
          </div>
        </div>
      </li>

    </ul>
  </div>

  <div class="dropdownRoot">
    <div class="dropdownBackground" style="transform: translateX(452px) scaleX(0.707692) scaleY(1.1075);">
      <div class="alternateBackground" style="transform: translateY(255.53px);"></div>
    </div>
    <div class="dropdownArrow" style="transform: translateX(636px) rotate(45deg);"></div>
    <div class="dropdownContainer" style="transform: translateX(452px); width: 368px; height: 443px;">

      <div class="dropdownSection left" data-dropdown="products">
        <div class="dropdownContent">

          <div class="linkGroup">
            <ul class="productsGroup">
              <li><a class="linkContainer item-payments" href="/shop/soulmate">
                  <svg viewBox="0 0 48 48">
                    <path fill="#87BBFD" class="hover-fillLight" d="M24 48C12.11 48 2.244 39.35.338 28H6.5V9H5.27C9.67 3.515 16.423 0 24 0c13.255 0 24 10.745 24 24S37.255 48 24 48z"></path>
                    <path fill="#555ABF" class="hover-fillDark" d="M25 21v8H.526A24.082 24.082 0 0 1 0 24 23.908 23.908 0 0 1 6.116 8H31.5c.828 0 1.5.67 1.5 1.5V21h-8zm-10.502-8.995a6.497 6.497 0 1 0 0 12.994 6.497 6.497 0 0 0 0-12.996z"></path>
                    <path fill="#FFF" d="M39.823 39.276a2.44 2.44 0 0 1-1.76.724H16.5a1.5 1.5 0 0 1-1.5-1.5v-18c0-.828.67-1.5 1.5-1.5h27.693a1.51 1.51 0 0 1 1.484 1.256c.21 1.217.323 2.467.323 3.744 0 5.936-2.355 11.32-6.177 15.276zM33.5 23.002a6.497 6.497 0 1 0 0 12.995 6.497 6.497 0 0 0 .002-12.994z"></path>
                  </svg>
                  <div class="productLinkContent">
                    <h3 class="linkTitle">Soulmate Drawing</h3>
                    <p class="linkSub">Receive a drawing & reading of your soulmate!</p>
                  </div>
                </a></li>
              <li><a class="linkContainer item-subscriptions" href="/shop/twin-flame">
                  <svg viewBox="0 0 48 48">
                    <path fill="#74E4A2" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"></path>
                    <path fill="#FFF" d="M39.558 30.977c-6.23 6.225-16.304 6.194-22.535-.03l13.975-13.962c-6.232-6.224-16.335-6.224-22.567 0-4.043 4.04-5.456 9.712-4.247 14.896l-.654.174a21.89 21.89 0 0 1-1.536-8.61c.284-11.806 10.003-21.35 21.823-21.446 6.15-.05 11.72 2.42 15.744 6.438 6.23 6.226 6.23 16.318 0 22.542z"></path>
                    <path fill="#159570" class="hover-fillDark" d="M33.653 21.413c1.43 5.336-1.735 10.82-7.068 12.25-5.332 1.43-10.814-1.736-12.242-7.072-1.43-5.334 1.735-10.82 7.068-12.25 5.334-1.43 10.815 1.738 12.244 7.074z"></path>
                  </svg>
                  <div class="productLinkContent">
                    <h3 class="linkTitle">Twin Flame Drawing</h3>
                    <p class="linkSub">Receive a drawing & reading of your Twin Flame!</p>
                  </div>
                </a></li>
              <li><a class="linkContainer item-connect" href="/shop/future-spouse">
                  <svg viewBox="0 0 48 48">
                    <path fill="#68D4F8" class="hover-fillLight" d="M48 24c0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0c1.363 0 2.698.12 4 .338V15h5v5h14.662c.218 1.302.338 2.637.338 4z"></path>
                    <path fill="#FFF" d="M16.99 29.966L17 17l-5.55-.006a1.02 1.02 0 0 0-.725.3L2.65 25.446a1.55 1.55 0 0 0-.44 1.28c1.22 9.944 9.1 17.825 19.042 19.047.472.058.945-.104 1.28-.44l8.172-8.076c.192-.193.3-.453.3-.725L31 31l-12.985-.01a1.023 1.023 0 0 1-1.024-1.024z"></path>
                    <path fill="#217AB7" class="hover-fillDark" d="M47.697 20.195L37.194 30.702a1.03 1.03 0 0 1-.726.3h-5.462V18.03c0-.567-.46-1.025-1.025-1.025H16.994V11.52c0-.274.108-.534.3-.726L27.783.3C38 1.916 46.07 9.98 47.698 20.194z"></path>
                  </svg>
                  <div class="productLinkContent">
                    <h3 class="linkTitle">Future Spouse Drawing</h3>
                    <p class="linkSub">Receive a drawing & reading of your future spouse!</p>
                  </div>
                </a></li>

<!--
              <li><a class="linkContainer item-relay" href="#">
                  <svg viewBox="0 0 48 48">
                    <path fill="#FFA27B" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"></path>
                    <path fill="#C23D4B" class="hover-fillDark" d="M24 12.5c8.285 0 15 6.828 15 15.25S32.285 43 24 43c-8.284 0-15-6.828-15-15.25S15.716 12.5 24 12.5z"></path>
                    <path fill="#FFF" d="M25 38.925v6.288a.787.787 0 0 1-.788.787h-.424a.787.787 0 0 1-.788-.788v-6.287c-3.668-.49-6.5-3.623-6.5-7.425a7.5 7.5 0 0 1 15 0c0 3.802-2.832 6.935-6.5 7.425z"></path>
                  </svg>
                  <div class="productLinkContent">
                  <h3 class="linkTitle">Future Spouse Drawing</h3>
                    <p class="linkSub">Receive a drawing & reading of your future spouse!</p>
                  </div>
                </a></li>

              <li><a class="linkContainer item-atlas" href="#">
                  <svg viewBox="0 0 48 48">
                    <path fill="#FCD669" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"></path>
                    <path fill="#CE7C3A" class="hover-fillDark" d="M24.012 1.834c.366.005.73.196.92.575l16.825 33.72c.396.79-.314 1.685-1.175 1.48L24 33.626V1.834h.01z"></path>
                    <path fill="#FFF" d="M24 1.834v31.794l-16.584 3.98A1.043 1.043 0 0 1 6.24 36.13L23.067 2.41c.195-.39.572-.58.947-.576H24z"></path>
                  </svg>
                  <div class="productLinkContent">
                  <h3 class="linkTitle">Future Spouse Drawing</h3>
                    <p class="linkSub">Receive a drawing & reading of your future spouse!</p>
                  </div>
                </a></li>
-->

              <li><a class="linkContainer item-radar" href="/shop/past-life">
                  <svg viewBox="0 0 48 48">
                    <path class="hover-fillLight" fill="#F6A4EB" d="M41.364 21.886h6.538c.06.697.098 1.4.098 2.114 0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0c6.833 0 12.993 2.86 17.364 7.442v14.444z"></path>
                    <path fill="#FFF" d="M37.746 37.4a1.3 1.3 0 0 1 .92-.38c.72 0 1.303.444 1.303 1.163 0 .503-.353.982-.708 1.292-3.484 3.122-8.325 5.53-13.783 5.53-11.75 0-19.486-9.538-19.486-18.83 0-8.72 7.195-16.19 15.25-16.19s11.227 5.54 11.227 5.54L37.747 37.4z"></path>
                    <path class="hover-fillDark" fill="#9251AC" d="M47.995 24zm0 0c0-.995-.807-1.974-1.802-1.974-1.15 0-1.8.94-1.8 1.83-.09 3.174-1.228 7.127-3.453 10.182-2.355 3.232-6.91 6.956-13.242 6.956-7.625 0-13.213-5.767-13.213-11.925 0-4.3 2.886-7.17 5.828-7.17 1.588 0 2.48.683 2.965 1.312.362.468 1.063.493 1.482.074L40.968 7.032A23.926 23.926 0 0 1 47.995 24z"></path>
                  </svg>
                  <div class="productLinkContent">
                    <h3 class="linkTitle">Past Life Reading <span class="new-badge">New</span></h3>
                    <p class="linkSub">Dive deep and rediscover your past</p>
                  </div>
                </a></li>
            </ul>
          </div>

          <ul class="linkGroup linkList prodsubGroup">
            <li>
              <a class="linkContainer item-pricing" href="/support/faq" data-analytics-action="pricing" data-action-source="nav">
                <h3 class="linkTitle linkIcon"><svg width="17" height="17">
                    <path fill="#6772E5" class="hover-fillDark" d="M15.998 6.98c0 .24-.083.458-.217.635a1.373 1.373 0 0 1-.187.24l-7.736 7.742c-.534.534-1.4.534-1.934 0L1.41 11.08a1.37 1.37 0 0 1 0-1.935l7.736-7.743c.15-.15.33-.255.52-.32a.918.918 0 0 1 .16-.048c.136-.03.275-.034.412-.02l4.192.002c.867 0 1.57.665 1.57 1.486l-.002 4.48zm-2.366-3.62a1.254 1.254 0 0 0-1.772 1.77 1.254 1.254 0 0 0 1.772-1.77z"></path>
                    <path fill="#87BBFD" class="hover-fillLight" d="M5.143 10.396l3.253-3.254c.2-.2.523-.2.722 0l.723.723c.2.2.2.524.003.723L6.59 11.842c-.2.2-.524.2-.724 0l-.723-.724a.51.51 0 0 1 0-.723z"></path>
                  </svg>FAQ</h3>
              </a>
            </li>
            <li><a class="linkContainer item-workswith" href="/support/order-status">
                <h3 class="linkTitle linkIcon"><svg width="17" height="17">
                    <path class="hover-fillLight" fill="#87BBFD" d="M15.998 12.495a1.03 1.03 0 0 1-.595.908L8.93 16.395a1.018 1.018 0 0 1-.86 0l-6.473-2.992a1.03 1.03 0 0 1-.594-.908V4.51c.006-.2.07-.39.18-.55L8.5 7.338l7.32-3.38c.108.16.172.35.178.55v7.984z"></path>
                    <path class="hover-fillDark" fill="#6772E5" d="M15.998 12.495a1.03 1.03 0 0 1-.595.908L8.93 16.395a1.026 1.026 0 0 1-.43.095V7.34l7.32-3.38c.11.16.173.35.18.55v7.984z"></path>
                    <path class="hover-fillLight" fill="#87BBFD" d="M8.5 5C6.567 5 5 4.228 5 3.275v-1.15h.098c.36.768 1.742 1.34 3.402 1.34 1.66.002 3.043-.572 3.402-1.34H12v1.15C12 4.228 10.433 5 8.5 5z"></path>
                  </svg>Order Status</h3>
              </a></li>
          </ul>

        </div>
      </div>

      <div class="dropdownSection active" data-dropdown="support">
        <div class="dropdownContent">

          <div class="linkGroup documentationGroup">
            <a class="linkContainer withIcon item-documentation" href="/support/contact">
              <h3 class="linkTitle linkIcon"><svg width="17" height="17">
                  <path fill="#87BBFD" class="hover-fillLight" d="M.945 1.998h3.632C6.744 1.998 8.5 3.005 8.5 4.83v11.583c-.512 0-1.015-.337-1.33-.59-1.03-.828-3.057-.828-5.222-.828H.945A.944.944 0 0 1 0 14.052V2.944C0 2.422.423 2 .945 2z"></path>
                  <path fill="#6772E5" class="hover-fillDark" d="M16.055 1.998h-3.632C10.257 1.998 8.5 3.005 8.5 4.83v11.583c.512 0 1.015-.337 1.33-.59 1.03-.828 3.057-.828 5.222-.828h1.003A.944.944 0 0 0 17 14.05V2.945A.944.944 0 0 0 16.055 2z"></path>
                </svg>Support</h3>
              <span class="linkSub">Need some help? Let us know!</span>
            </a>
           
          </div>

          <div class="linkGroup documentationGroup">
            <a class="linkContainer withIcon item-documentation" href="/support/faq">
              <h3 class="linkTitle linkIcon"><svg width="17" height="17">
                    <path fill="#6772E5" class="hover-fillDark" d="M8.5 17a8.5 8.5 0 1 1 0-17 8.5 8.5 0 0 1 0 17zM6.987 6.078a.684.684 0 0 0-.968-.968L3.116 8.012a.684.684 0 0 0 0 .967l2.9 2.9a.684.684 0 0 0 .97-.967l-2.42-2.418 2.42-2.42zm6.996 1.95L11.08 5.123a.684.684 0 0 0-.966.968l2.418 2.42-2.418 2.417a.684.684 0 0 0 .967.967l2.904-2.902a.684.684 0 0 0 0-.966z"></path>
                  </svg>FaQ</h3>
              <span class="linkSub">Freequently Asked Questions</span>
            </a>
           
          </div>

          <div class="linkGroup documentationGroup">
            <a class="linkContainer withIcon item-documentation" href="/support/faq">
              <h3 class="linkTitle linkIcon"><svg width="17" height="17">
                    <path d="M1 9h2.95l3-6.5 3 12 3-5.45L16 9" fill="none" stroke="#6772e5" class="hover-strokeDark" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>Order Status</h3>
              <span class="linkSub">Check your Order Status!</span>
            </a>
           
          </div>

        </div>
      </div>

      <div class="dropdownSection right" data-dropdown="company">
        <div class="dropdownContent">

          <ul class="linkGroup linkList companyGroup">
          <li>
            <a class="linkContainer item-about" href="/legal/dmca">
            <h3 class="linkTitle linkIcon">DMCA</h3>
            </a></li>

            <li>
            <a class="linkContainer item-about" href="/legal/privacy-policy">
            <h3 class="linkTitle linkIcon">Privacy Policy</h3>
            </a></li>

            <li>
            <a class="linkContainer item-about" href="/legal/terms-of-service">
            <h3 class="linkTitle linkIcon">Terms of Service</h3>
            </a></li>

           

            <li>
            <a class="linkContainer item-about" href="/legal/refund-policy">
            <h3 class="linkTitle linkIcon">Refund Policy</h3>
            </a></li>

            <li>
            <a class="linkContainer item-about" href="/legal/facebook-policy">
            <h3 class="linkTitle linkIcon">Facebook Policy</h3>
            </a></li>

         
          </ul>


        </div>
      </div>

    </div>
  </div>

</header>