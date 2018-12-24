@extends('layouts.admin') @section('title') Inventory Management System @endsection @section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Create Products</h4>
    <ul class="breadcrumbs pull-left">
        <li><a>Dashboard</a></li>
        <li><a href="{{ route('product.all') }}">All Products</a></li>
        <li><span>Show</span></li>
    </ul>
</div>
@endsection @section('content')
<div id="products-show-page" class="row">
    <div class="col-md-9 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img style="width: 100%" src="https://m.media-amazon.com/images/I/71TvxKiYMIL._SX480_.jpg" class="show-Products-img">
                    </div>
                    <div class="col-md-8">
                        <h2>Title</h2>
                        <p>
                            <span>Description:</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum dignissimos, tenetur! Ad est molestias quae ratione numquam delectus maiores impedit illo molestiae blanditiis quasi atque, sit, porro
                            velit corporis, consectetur quibusdam alias saepe magnam nemo et labore officiis ullam necessitatibus.
                        </p>
                        <div class="details row">
                            <div class="col-md-3">
                                <h5>SKU</h5>
                                <span>23344234</span>
                            </div>
                            <div class="col-md-3">
                                <h5>Material</h5>
                                <span>23344234</span>
                            </div>
                            <div class="col-md-3">
                                <h5>Brand</h5>
                                <span>23344234</span>
                            </div>
                            <div class="col-md-3">
                                <h5>Creator</h5>
                                <span>23344234</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="col-md-3 mt-5">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-primary btn-lg btn-block">Edit
                <i class="fa fa-edit"></i>
                </a>
                <a href="" class="btn btn-danger btn-lg btn-block">Delete
                <i class="ti-trash"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Progress Table end -->
@endsection
