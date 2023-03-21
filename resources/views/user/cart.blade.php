@extends('layouts.main_user')

@section('style')
<style>
</style>
@endsection

@section('head')
<title>ตะกร้าสินค้า</title>
@endsection

@section('content')
<div class="2-columns ecommerce-application navbar-floating footer-static">
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">ตะกร้าสินค้า</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item active">ตะกร้าสินค้า
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <form action="#" class="icons-tab-steps checkout-tab-steps wizard-circle">
                    <!-- Checkout Place order starts -->
                    <h6><i class="step-icon step feather icon-shopping-cart"></i> ตะกร้าสินค้า</h6>
                    <fieldset class="checkout-step-1 px-0">
                        <section id="place-order" class="list-view product-checkout">
                            <div class="checkout-items">
                                <div class="card ecommerce-card">
                                    <div class="card-content">
                                        <div class="item-img text-center">
                                            <a href="app-ecommerce-details.html">
                                                <img src="../../../app-assets/images/pages/eCommerce/9.png" alt="img-placeholder">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-name">
                                                <a href="app-ecommerce-details.html">Amazon - Fire TV Stick with Alexa Voice Remote - Black</a>
                                                <span></span>
                                            </div>
                                            <div class="item-quantity">
                                                <p class="quantity-title">Quantity</p>
                                                <div class="input-group quantity-counter-wrapper">
                                                    <input type="text" class="quantity-counter" value="1">
                                                </div>
                                            </div>
                                            <p class="delivery-date">รายละเอียดเพิ่มเติม</p>
                                        </div>
                                        <div class="item-options text-center">
                                            <div class="item-wrapper">
                                                <div class="item-cost">
                                                    <h6 class="item-price">
                                                        $39.99
                                                    </h6>
                                                    <p class="shipping">
                                                        <i class="feather icon-shopping-cart"></i> ส่งฟรี
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="wishlist remove-wishlist">
                                                <i class="feather icon-x align-middle"></i> ลบจากรายการ
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-options">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">

                                            
                                            <div class="price-details">
                                                <p>Price Details</p>
                                            </div>
                                            <div class="detail">
                                                <div class="detail-title">
                                                    Total
                                                </div>
                                                <div class="detail-amt">
                                                    $598
                                                </div>
                                            </div>
                                            <div class="detail">
                                                <div class="detail-title">
                                                    Delivery Charges
                                                </div>
                                                <div class="detail-amt discount-amt">
                                                    Free
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="detail">
                                                <div class="detail-title detail-total">Total</div>
                                                <div class="detail-amt total-amt">$574</div>
                                            </div>
                                            <!-- <div class="btn btn-primary btn-block place-order">PLACE ORDER</div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                    <!-- Checkout Place order Ends -->

                    <!-- Checkout Customer Address Starts -->
                    <fieldset class="checkout-step-2 px-0">
                        <section id="checkout-address" class="list-view product-checkout">
                            <div class="card">
                                <div class="card-header flex-column align-items-start">
                    <h6><i class="step-icon step feather icon-home"></i> เลือกที่อยู่</h6>
                    <div class="card-content">
                                    <div class="card-body">
                    <!-- <form action="{{ route('store.useraddress') }}" method="POST" enctype="multipart/form-data"> -->
                    <form>
                                <fieldset>                       
                                    <!-- @csrf -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-name">ชื่อจริง:</label>
                                                    <input type="text" class="form-control required" 
                                                    name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-number">หมายเลขโทรศัพท์:</label>
                                                    <input type="number" class="form-control required" 
                                                    name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-apt-number">บ้านเลขที่:</label>
                                                    <input type="text" class="form-control required" 
                                                    name="address">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-landmark">รายละเอียดเพิ่มเติม:</label>
                                                    <input type="text" class="form-control required" 
                                                    name="address_addon">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-city">ตำบล/อำเภอ:</label>
                                                    <input type="text" class="form-control required"
                                                     name="district">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-pincode">รหัสไปรษณีย์:</label>

                                                    <input type="number" class="form-control required" 
                                                    name="province_code">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-state">จังหวัด:</label>
                                                    <input type="text" class="form-control required" 
                                                    name="province">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="add-type">ประเภทสถานที่:</label>
                                                    <select class="form-control" name="address_type">
                                                        <option>บ้าน</option>
                                                        <option>สำนักงาน</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn btn-primary btn-block delivery-address">
                                             <a href="{{ route('checkout') }}" style="color:#FFFFFF;"> ดำเนินการต่อ</a></div>
                                         </div>
                                    </div>
                                </div>
                                </fieldset>
                                <!-- <button style="background-color: #257d0f ;color:white" class="btn" 
                                href="{{ route('checkout') }}" 
                                type="submit">บันทึกที่อยู่และชำระเงิน</button> -->
                                
                                 </form>
                                 <!-- Checkout Customer Address Ends -->
               
                <div class="row justify-content-center">
                         <div class="col-12">
                     <section id="ecommerce-products" class="grid-view">
                        <div class="row">

                   @forEach ($showAddress as $add)
                        <div class="col" style="margin-top: 25px;" >
                        <div class="card ecommerce-card" style="width: 24rem">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="item-wrapper">
                                       
                                        <div class="card-header">
                                        <h4 class="card-title">{{ $add->name }}</h4>
                                  
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <p class="mb-0">{{ $add->address }}  {{ $add->address_addon}}</p>
                                    <div>
                                    <p class="mb-0">{{ $add->district }} {{ $add->province }}</p>
                                    </div>
                                    <div>
                                    <p>{{ $add->province_code }} </p>
                                    </div>
                                    <div>
                                    <p>{{ $add->phone }}</p>
                                    </div>
                                    <hr>
                                            <div class="btn btn-primary btn-block delivery-address">
                                             <a href="{{ route('checkout') }}" style="color:#FFFFFF;"> เลือกที่อยู่นี้</a></div>
                                </div>
                                
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
      
                        </div>
                    </section>
                        </div>
                

            </div>
            </div>
        </div>
    </div>
    </div
                                 </div>
                                 </div>
                                 </div>
                                 </div>
</section>
</fieldset>
 </form>
                    >
    @endsection


    @section('script')

@endsection

