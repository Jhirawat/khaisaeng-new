@extends('layouts.main_admin')

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

@section('js')
    <script>
        function getData(data) {
            let id = document.getElementById('id')
            id.value = data.id;

            let name = document.getElementById('name');
            name.value = data.name;

            let price = document.getElementById('price');
            price.value = data.price;

            let description = document.getElementById('description');
            description.value = data.description;
        }
    </script>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                {{-- start form --}}
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div id="column-chartt"></div>
                                <h3>รายการสินค้า</h3>
                                <div class="content-body">
                                    <!-- Data list view starts -->
                                    <section id="data-thumb-view" class="data-thumb-view-header">

                                        <!-- dataTable starts -->
                                        <div class="table-responsive">
                                            <table class="table data-thumb-view">
                                                <thead>
                                                    <tr>
                                                        {{-- <th></th>
                                                    <th>Image</th>
                                                    <th>NAME</th>
                                                    <th>CATEGORY</th>
                                                    <th>POPULARITY</th>
                                                    <th>ORDER STATUS</th>
                                                    <th>PRICE</th>
                                                    <th>ACTION</th> --}}

                                                        <th scope="col">ID</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Update</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($productss as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>
                                                                <img src="{{ asset('images/' . $item->image) }}"
                                                                    class="card-img-top"
                                                                    style="max-width: 50px;max-height: 150px" />
                                                            </td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->description }}</td>
                                                            <td>{{ $item->category }}</td>
                                                            <td>


                                                                <button type="button" class="btn " data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"
                                                                    onclick="getData({{ $item }})"
                                                                    style="background-color: #158c1d;height: 30px;width: 75px;padding: 0; color:white;border-radius: 7px;">
                                                                    <i class="feather icon-edit"></i>แก้ไข
                                                                </button>

                                                            </td>
                                                            <td>



                                                                <button onclick="deletepro('{{ $item->id }}')"
                                                                    type="button" class="btn btn-danger"
                                                                    data-bs-toggle="modal" data-bs-target="#inlineFormEdit"
                                                                    onclick="getData('{{ $item->id }}')"
                                                                    style="background-color: #c00f35;height: 30px;width: 75px;padding: 0; color:white;border-radius: 7px;">
                                                                    <i class="feather icon-edit"></i>ลบ
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                 
                                                </tbody>
                                            </table>
                                        </div>

                                    </section>


                                </div>



                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
