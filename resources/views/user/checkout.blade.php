@extends('layouts.main_user')

@section('style')
<style>
        .navbar-floating .header-navbar-shadow {
            display: block;
            background: linear-gradient(180deg, #524f4f00 44%, rgb(248 248 248 / 0%) 73%, rgba(255, 255, 255, 0))!important;
            padding-top: 2.2rem;
            background-repeat: repeat;
            width: 100%;
            height: 102px;
            position: fixed;
            top: 0;
            z-index: 11;
        }
</style>
@endsection

@section('head')
<title>ชำระเงิน</title>
@endsection

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">ชำระเงิน</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('products') }}">หน้าหลัก</a>
                                </li>
                                <li class="breadcrumb-item active">ชำระเงิน
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            
             

                                <!-- Checkout Payment Starts -->
                                <h6><i class="step-icon step feather icon-credit-card"></i>Payment</h6>
                    <fieldset class="checkout-step-3 px-0">
                        <section id="checkout-payment" class="list-view product-checkout">
                            <div class="payment-type">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start">
                                        <h4 class="card-title">Payment options</h4>
                                        <p class="text-muted mt-25">Be sure to click on correct payment option</p>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between flex-wrap">
                                                <div class="vs-radio-con vs-radio-primary">
                                                    <input type="radio" name="vueradio" checked="" value="false">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <img src="../../../app-assets/images/pages/eCommerce/bank.png" alt="img-placeholder" height="40">
                                                    <span>US Unlocked Debit Card 12XX XXXX XXXX 0000
                                                    </span>
                                                </div>
                                                <div class="card-holder-name mt-75">
                                                    John Doe
                                                </div>
                                                <div class="card-expiration-date mt-75">
                                                    11/2020
                                                </div>
                                            </div>
                                            <div class="customer-cvv mt-1">
                                                <div class="form-inline">
                                                    <label class="mb-50" for="card-holder-cvv">Enter CVV:</label>
                                                    <input type="number" class="form-control ml-75 mb-50 input-cvv" id="card-holder-cvv">
                                                    <div class="btn btn-primary btn-cvv ml-50 mb-50">Continue</div>
                                                </div>
                                            </div>
                                            <hr class="my-2">
                                            <ul class="other-payment-options list-unstyled">
                                                <li>
                                                    <div class="vs-radio-con vs-radio-primary py-25">
                                                        <input type="radio" name="vueradio" value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span>
                                                            Credit / Debit / ATM Card
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="vs-radio-con vs-radio-primary py-25">
                                                        <input type="radio" name="vueradio" value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span>
                                                            Net Banking
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="vs-radio-con vs-radio-primary py-25">
                                                        <input type="radio" name="vueradio" value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span>
                                                            EMI (Easy Installment)
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="vs-radio-con vs-radio-primary py-25">
                                                        <input type="radio" name="vueradio" value="false">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span>
                                                            Cash On Delivery
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class="gift-card">
                                                <p><i class="feather icon-plus-square mr-25 font-medium-5"></i>
                                                    Add Gift Card
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amount-payable checkout-options">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Price Details</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="detail">
                                                <div class="details-title">
                                                    Price of 3 items
                                                </div>
                                                <div class="detail-amt">
                                                    <strong>$699.30</strong>
                                                </div>
                                            </div>
                                            <div class="detail">
                                                <div class="details-title">
                                                    Delivery Charges
                                                </div>
                                                <div class="detail-amt discount-amt">
                                                    Free
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="detail">
                                                <div class="details-title">
                                                    Amount Payable
                                                </div>
                                                <div class="detail-amt total-amt">$699.30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>

                    <!-- Checkout Payment Starts -->

        </div>
    </div>
</div>
@endsection

@section('script')
<script>
   $(document).ready(function() {
                            "use strict";
                            // RTL Support
                            var direction = 'ltr';
                            if ($('html').data('textdirection') == 'rtl') {
                                direction = 'rtl';
                            }

                            var sidebarShop = $(".sidebar-shop"),
                                shopOverlay = $(".shop-content-overlay"),
                                sidebarToggler = $(".shop-sidebar-toggler"),
                                priceFilter = $(".price-options"),
                                gridViewBtn = $(".grid-view-btn"),
                                listViewBtn = $(".list-view-btn"),
                                ecommerceProducts = $("#ecommerce-products"),
                                cart = $(".cart"),
                                wishlist = $(".wishlist");


                            // show sidebar
                            sidebarToggler.on("click", function() {
                                sidebarShop.toggleClass("show");
                                shopOverlay.toggleClass("show");
                            });

                            // remove sidebar
                            $(".shop-content-overlay, .sidebar-close-icon").on("click", function() {
                                sidebarShop.removeClass("show");
                                shopOverlay.removeClass("show");
                            })

                            //price slider
                            var slider = document.getElementById("price-slider");
                            if (slider) {
                                noUiSlider.create(slider, {
                                    start: [51, 5000],
                                    direction: direction,
                                    connect: true,
                                    tooltips: [true, true],
                                    format: wNumb({
                                        decimals: 0,
                                    }),
                                    range: {
                                        "min": 51,
                                        "max": 5000
                                    }
                                });
                            }
                            // for select in ecommerce header
                            if (priceFilter.length > 0) {
                                priceFilter.select2({
                                    minimumResultsForSearch: -1,
                                    dropdownAutoWidth: true,
                                    width: '100%'
                                });
                            }

                            /***** CHANGE VIEW *****/
                            // Grid View
                            gridViewBtn.on("click", function() {
                                ecommerceProducts.removeClass("list-view").addClass("grid-view");
                                listViewBtn.removeClass("active");
                                gridViewBtn.addClass("active");
                            });

                            // List View
                            listViewBtn.on("click", function() {
                                ecommerceProducts.removeClass("grid-view").addClass("list-view");
                                gridViewBtn.removeClass("active");
                                listViewBtn.addClass("active");
                            });

                            // For View in cart
                            cart.on("click", function() {
                                var $this = $(this),
                                    addToCart = $this.find(".add-to-cart"),
                                    viewInCart = $this.find(".view-in-cart");
                                if (addToCart.is(':visible')) {
                                    addToCart.addClass("d-none");
                                    viewInCart.addClass("d-inline-block");
                                } else {
                                    var href = viewInCart.attr('href');
                                    window.location.href = href;
                                }
                            });

                            $(".view-in-cart").on('click', function(e) {
                                e.preventDefault();
                            });

                            // For Wishlist Icon
                            wishlist.on("click", function() {
                                var $this = $(this)
                                $this.find("i").toggleClass("fa-heart-o fa-heart")
                                $this.toggleClass("added");
                            })

                            // Checkout Wizard
                            var checkoutWizard = $(".checkout-tab-steps"),
                                checkoutValidation = checkoutWizard.show();
                            if (checkoutWizard.length > 0) {
                                $(checkoutWizard).steps({
                                    headerTag: "h6",
                                    bodyTag: "fieldset",
                                    transitionEffect: "fade",
                                    titleTemplate: '<span class="step">#index#</span> #title#',
                                    enablePagination: false,
                                    onStepChanging: function(event, currentIndex, newIndex) {
                                        // allows to go back to previous step if form is
                                        if (currentIndex > newIndex) {
                                            return true;
                                        }
                                        // Needed in some cases if the user went back (clean up)
                                        if (currentIndex < newIndex) {
                                            // To remove error styles
                                            checkoutValidation.find(".body:eq(" + newIndex + ") label.error").remove();
                                            checkoutValidation.find(".body:eq(" + newIndex + ") .error").removeClass(
                                                "error");
                                        }
                                        // check for valid details and show notification accordingly
                                        if (currentIndex === 1 && Number($(".form-control.required").val().length) <
                                            1) {
                                            toastr.warning('Error', 'Please Enter Valid Details', {
                                                "positionClass": "toast-bottom-right"
                                            });
                                        }
                                        checkoutValidation.validate().settings.ignore = ":disabled,:hidden";
                                        return checkoutValidation.valid();
                                    },
                                });
                                // to move to next step on place order and save address click
                                $(".place-order, .delivery-address").on("click", function() {
                                    $(".checkout-tab-steps").steps("next", {});
                                });
                                // check if user has entered valid cvv
                                $(".btn-cvv").on("click", function() {
                                    if ($(".input-cvv").val().length == 3) {
                                        toastr.success('Success', 'Payment received Successfully', {
                                            "positionClass": "toast-bottom-right"
                                        });
                                    } else {
                                        toastr.warning('Error', 'Please Enter Valid Details', {
                                            "positionClass": "toast-bottom-right"
                                        });
                                    }
                                })
                            }

                            // checkout quantity counter
                            var quantityCounter = $(".quantity-counter"),
                                CounterMin = 1,
                                CounterMax = 10;
                            if (quantityCounter.length > 0) {
                                quantityCounter.TouchSpin({
                                    min: CounterMin,
                                    max: CounterMax
                                }).on('touchspin.on.startdownspin', function() {
                                    var $this = $(this);
                                    $('.bootstrap-touchspin-up').removeClass("disabled-max-min");
                                    if ($this.val() == 1) {
                                        $(this).siblings().find('.bootstrap-touchspin-down').addClass("disabled-max-min");
                                    }
                                }).on('touchspin.on.startupspin', function() {
                                    var $this = $(this);
                                    $('.bootstrap-touchspin-down').removeClass("disabled-max-min");
                                    if ($this.val() == 10) {
                                        $(this).siblings().find('.bootstrap-touchspin-up').addClass("disabled-max-min");
                                    }
                                });
                            }

                            // remove items from wishlist page
                            $(".remove-wishlist , .move-cart").on("click", function() {
                                $(this).closest(".ecommerce-card").remove();
                            })
                        })
                        // on window resize hide sidebar
                        $(window).on("resize", function() {
                            if ($(window).width() <= 991) {
                                $(".sidebar-shop").removeClass("show");
                                $(".shop-content-overlay").removeClass("show");
                            } else {
                                $(".sidebar-shop").addClass("show");
                            }
                        });
</script>

<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
<script src="../../../app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<script src="../../../app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../../app-assets/js/scripts/pages/app-ecommerce-shop.js"></script>
@endsection

