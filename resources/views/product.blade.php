@extends('layouts.main_user')

@section('head')
@endsection


@section('style')
    <style>
        .navbar-floating .header-navbar-shadow {
            display: block;
            background: linear-gradient(180deg, #524f4f00 44%, rgb(248 248 248 / 0%) 73%, rgba(255, 255, 255, 0)) !important;
            padding-top: 2.2rem;
            background-repeat: repeat;
            width: 100%;
            height: 102px;
            position: fixed;
            top: 0;
            z-index: 11;
        }
        @media(max-width:767px) {
        .mobile {
            font-size: 10px;
        }

        h5 {
            font-size: 14px;
        }

        h6 {
            font-size: 9px;
        }

        #mobile-font {
            font-size: 11px;
        }

        #prc {
            font-weight: 700;
            margin-left: -45px;
            padding-left: 105px;
        }

        #quantity {
            font-weight: 700;
            padding-left: 6px;
        }

        #produc {
            font-weight: 700;
            padding-left: 0px;
        }

        #total {
            font-weight: 700;
            padding-left: 9px;
        }

        #image {
            width: 60px;
            height: 60px;
        }

        .col {
            width: 100%;
        }

        #zero-pad {
            padding: 2%;
            margin-left: 10px;
        }

        #footer-font {
            font-size: 12px;
        }

        #heading {
            padding-top: 15px;
        }
    }
    </style>
@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                {{-- start form --}}
                <div class="container-fluid mt-2">
                    <div class="row mb-2">
                        <div class="col-sm-12 ">
                            <div>
                         sadasdasd
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
                <!-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a
                                    class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>


</script>
@endsection
