@extends('layouts.main_user')

@section('style')
<style>

</style>
@endsection

@section('content')

<div class="2-columns ecommerce-application navbar-floating footer-static">
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">ที่อยู่</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">ที่อยู่</a>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <form action="#" class="icons-tab-steps checkout-tab-steps wizard-circle">

                    <!-- Checkout Customer Address Starts -->
                    <h6><i class="step-icon step feather icon-home"></i>ที่อยู่ของคุณ</h6>
                    <fieldset class="checkout-step-2 px-0">
                        <section id="checkout-address" class="list-view product-checkout">
                            <div class="card">
                                <div class="card-header flex-column align-items-start">
                                    <h4 class="card-title">เพิ่มที่อยู่ใหม่</h4>
                                    <!-- <p class="text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p> -->
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-name">ชื่อจริง:</label>
                                                    <input type="text" id="checkout-name" class="form-control required" name="fname">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-number">หมายเลขโทรศัพท์:</label>
                                                    <input type="number" id="checkout-number" class="form-control required" name="mnumber">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-apt-number">บ้านเลขที่:</label>
                                                    <input type="number" id="checkout-apt-number" class="form-control required" name="apt-number">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-landmark">รายละเอียดเพิ่มเติม:</label>
                                                    <input type="text" id="checkout-landmark" class="form-control required" name="landmark">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-city">ตำบล/แขวง:</label>
                                                    <input type="text" id="checkout-city" class="form-control required" name="city">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-pincode">รหัสไปรษณีย์:</label>
                                                    <input type="number" id="checkout-pincode" class="form-control required" name="pincode">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-state">จังหวัด:</label>
                                                    <input type="text" id="checkout-state" class="form-control required" name="state">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="add-type">ประเภทสถานที่:</label>
                                                    <select class="form-control" id="add-type">
                                                        <option>บ้าน</option>
                                                        <option>สำนักงาน</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 offset-md-6">
                                                <div class="btn btn-primary delivery-address float-right">
                                                    บันทึกที่อยู่
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customer-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">John Doe</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body actions">
                                            <p class="mb-0">9447 Glen Eagles Drive</p>
                                            <p>Lewis Center, OH 43035</p>
                                            <p>UTC-5: Eastern Standard Time (EST) </p>
                                            <p>202-555-0140</p>
                                            <hr>
                                            <div class="btn btn-primary btn-block delivery-address">แก้ไขที่อยู่</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>

                    <!-- Checkout Customer Address Ends -->

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
                </form>

            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
<script>

</script>
@endsection

