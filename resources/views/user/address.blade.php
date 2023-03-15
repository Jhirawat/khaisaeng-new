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
                                    <li class="breadcrumb-item">ที่อยู่
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
                                <form action="{{ route('store.useraddress') }}"
                                method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    @csrf
                                <div class="card-content">
                                    <div class="card-body">
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
                                                    name="usernumber">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-apt-number">บ้านเลขที่:</label>
                                                    <input type="text" class="form-control required" 
                                                    name="apt-number">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-landmark">รายละเอียดเพิ่มเติม:</label>
                                                    <input type="text" class="form-control required" 
                                                    name="addon">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-city">ตำบล/แขวง:</label>
                                                    <input type="text" class="form-control required"
                                                     name="district">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="checkout-pincode">รหัสไปรษณีย์:</label>

                                                    <input type="number" class="form-control required" 
                                                    name="pincode">
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
                                                    <select class="form-control" name="add-type">
                                                        <option>บ้าน</option>
                                                        <option>สำนักงาน</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                                <button style="background-color: #257d0f ;color:white" class="btn"
                                                                type="submit">บันทึกที่อยู่</button>
                                </div>
                            </form>
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

                </form>

            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
<script>
    function getData(data) {
            let name = document.getElementById('name')
            name.value = data.name;

            let usernumber = document.getElementById('usernumber')
            usernumber.value = data.usernumber;

            let apt_number = document.getElementById('apt-number')
            apt_number.value = data.apt_number;

            let addon = document.getElementById('addon')
            addon.value = data.addon;

            let district = document.getElementById('district')
            district.value = data.district;

            let pincode = document.getElementById('pincode')
            pincode.value = data.pincode;

            let province = document.getElementById('province')
            province.value = data.province;

            let add_type = document.getElementById('add-type')
            add_type.value = data.add_type;
        
            
    }
    console.log(data);
</script>
@endsection

