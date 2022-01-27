<div id="form-progressbar" class="mb-2"></div>
<form class="form-order row g-0 needs-validation flex-grow-2" name="order_form" action="/order/order.php" method="get" novalidate>
<div id="form-type-wrapper" class="alert alert-info mb-0" role="alert" style="min-height:100px;">
<span class="type-it-zero" style="min-height:200px;"></span>

<div id="welcome-form-msg">
<span class="type-it"></span>
</div>

<div id="dob-form-msg">
<span class="type-it-two"></span>
</div>

<div id="delivery-form-msg">
<span class="type-it-three"></span>
</div>

</div>
<button type="button" id="start-form-btn" class="btn btn-primary btn-shadow w-100 btn-add-to-cart mb-2 mt-2 fw-bold fs-1"> <?php echo $button; ?> </button>


<div id="final-form-msg">
<span class="type-it-four"></span>
</div>











    <div class="mb-2 mt-2 userNameWrapper">
       
        <div class="form-floating">
        <input class="form-control mt-4" id="userName" type="text" name="userName" placeholder="Your Full Name" required />
        <span class="icon-inside"><i class="fas fa-user"></i></span>
        <label for="userName">Your Full Name</label>
        </div>
        <div class="form-floating mt-2">
        <input class="form-control mt-2" id="userEmail" type="email" name="userEmail" placeholder="email@gmail.com" required />
        <span class="icon-inside"><i class="fas fa-envelope"></i></span>
        <label for="userEmail">Your E-mail</label>
        </div>
        <div id="error" class="mt-2"></div>
        <div id="errorEmail" class="mt-2"></div>
    </div>
    <button type="button" id="name-confirm-btn" class="btn btn-primary btn-shadow w-100 btn-add-to-cart mb-2 mt-2 fw-bold fs-1" disabled> Confirm!</button>

    <div class="mb-2 mt-2 userDobWrapper">
        <?php if($formDate == "US"){ ?>
        <input class="form-control" id="userDobUS" name="userDobUS" placeholder="MM/DD/YYYY" required />
        <div id="errorDobUS" class="mt-2"></div>
        <?php }else{ ?>
        <input class="form-control " id="userDob" name="userDob" placeholder="DD-MM-YYYY" required />
        <div id="errorDob" class="mt-2"></div>
        <?php } ?>
        

    </div>
    <button type="button" id="dob-confirm-btn" class="btn btn-primary btn-shadow w-100 btn-add-to-cart mb-2 mt-2 fw-bold fs-1" disabled> Confirm!</button>


    <div class="mb-2 mt-2 userDeliveryWrapper">
    <div class="position-relative">
        <label class="fs-1 fw-bold">Delivery Priority </label> 
        <div class="product-badge product-available mt-n1 dropdown-toggle" data-bs-toggle="collapse" href="#deliveryCollapse" role="button" aria-expanded="false" aria-controls="deliveryCollapse">
            <i class="far fa-question-circle"></i> Delivery Options
        </div>
    </div>


<div id="delivery-speed" class="delivery-speed-clicked">
    <div class="btn-group d-flex delivery-speed-flex" style="width:100%;" role="group" aria-label="Delivery Speed">
    
    <div class="mb-111">
    <input type="radio" class="btn-check" name="priority" id="prio12" value="12">
    <label class="btn btn-outline-oran prio12" for="prio12"><span><i class="fas fa-bolt"></i> Express</span></label>
    </div>

    <div class="mb-111">
    <input type="radio" class="btn-check" name="priority" id="prio24" value="24">
    <label class="btn btn-outline-oran prio24" for="prio24"><span><i class="fas fa-stopwatch"></i> Fast</span></label>
    </div>

    <div class="mb-111">
    <input type="radio" class="btn-check" name="priority" id="prio48" value="48" checked>
    <label class="btn btn-outline-oran prio48" for="prio48"><span><i class="fas fa-clock"></i> Standard</span></label>
    </div>
</div>

        <div class="col-sm-12">
            <div class="collapse multi-collapse mb-3 mb-sm-0" id="deliveryCollapse">
                <div class="accordion mb-4" id="productPanels">
                    <div class="accordion-item">
                        <div class="accordion-header bg-light p-3">
                        <div class="d-flex flex-between-center">
                        <h3 class="mb-0 fw-bold fs-1"><i class="fas fa-shipping-fast" style="margin-right:15px;margin-left:20px;font-size:130%;"></i> Delivery Options </h3>
                        <a id="close-deliveryCollapse" class="btn btn-link btn-sm px-2" href="#!"><span class="fas fa-times" style="font-size: 200%!important;color: #000;"></span></a>
                        </div>
                           
                        </div>
                        <div class="accordion-collapse collapse show" id="shippingOptions" data-bs-parent="#productPanels">
                            <div class="accordion-body fs-sm">
                                <div id="helper-delivery-express" class="d-flex justify-content-start border-bottom pb-2 align-items-center" style="cursor:pointer;">
                                    <div class="px-3"><i class="fas fa-clock" style="font-size:180%;font-weight:bold;color: #fe696a;"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Express Delivery</div>
                                        <div class="fs-sm text-muted">8 - 12 Hours</div>
                                    </div>
                                    <div class="fs-1 fw-bold badge bg-success">$14.99</div>
                                </div>


                                <div id="helper-delivery-fast" class="d-flex justify-content-start border-bottom py-2 align-items-center" style="cursor:pointer;">
                                <div class="px-3"><i class="fas fa-stopwatch" style="font-size:180%;font-weight:bold;color: #fe696a;"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Fast Delivery</div>
                                        <div class="fs-sm text-muted">18 - 24 Hours</div>
                                    </div>
                                    <div class="fs-1 fw-bold badge bg-success">$9.99</div>
                                </div>


                                <div id="helper-delivery-standard" class="d-flex justify-content-start pt-2 align-items-center" style="cursor:pointer;">
                                <div class="px-3"><i class="fas fa-bolt" style="font-size:180%;font-weight:bold;color: #fe696a;"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Standard Delivery</div>
                                        <div class="fs-sm text-muted">36 - 48 Hours</div>
                                    </div>
                                    <div class="fs-1 fw-bold badge bg-success">$0.00</div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

    </div>
    <input class="product" type="hidden" name="product" value="<?php echo $productID; ?>">
    <input class="cookie" type="hidden" name="cookie_id" value="<?php echo $_SESSION['user_cookie_id']; ?>">
    <div class="mb-1 mt-1"> <input type="submit" name="form_submit" class="btn btn-submit-form btn-primary btn-shadow w-100 btn-add-to-cart mb-1 mt-1 fw-bold fs-1" value="Place an order"></div>



</form>