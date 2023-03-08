@extends('layouts.main_admin')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                {{-- start form --}}
                <div class="container-fluid mt-2">
                    <div class="row mb-2">
                        <div class="col-sm-6 ">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        {{-- <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data"> --}}
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Product Name" />
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="image"
                                                placeholder="Image URL" />
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" class="form-control" name="price" placeholder="Price" />
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                            <br />
                                            <button class="btn btn-success" type="submit">Save</button>
                                            <a href="/admin" class="btn btn-outline-light">Back to Admin</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
