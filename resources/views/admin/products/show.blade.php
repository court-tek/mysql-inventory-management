@extends('layouts.admin') @section('title') Inventory Management System @endsection @section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Create Products</h4>
    <ul class="breadcrumbs pull-left">
        <li><a>Dashboard</a></li>
        <li><a href="{{ route('product.all') }}">All Products</a></li>
        @foreach ($Products as $prod)
          <li><span>{{$prod->title}}</span></li>
        @endforeach
    </ul>
</div>
@endsection @section('content')
<div id="products-show-page" class="row">
    <div class="col-md-9 mt-5">
        <div class="card">
            <div class="card-body">
                @foreach ($Products as $product)
                <div class="row">
                    <div class="col-md-4">
                        <img style="width: 100%" src="{{ $product->img_url }}" class="show-Products-img">
                    </div>
                    <div class="col-md-8">
                        <h2>{{ $product->title }}</h2>
                        <p>
                            <span>Description:</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum dignissimos, tenetur! Ad est molestias quae ratione numquam delectus maiores impedit illo molestiae blanditiis quasi atque, sit, porro
                            velit corporis, consectetur quibusdam alias saepe magnam nemo et labore officiis ullam necessitatibus.
                        </p>
                        <div class="details row">
                            <div class="col-md-3">
                                <h5>SKU</h5>
                                <span>{{ $product->sku }}</span>
                            </div>
                            <div class="col-md-3">
                                <h5>Material</h5>
                                <span>{{ $product->material }}</span>
                            </div>
                            <div class="col-md-3">
                                <h5>Brand</h5>
                                <span>{{ $product->brand }}</span>
                            </div>
                            <div class="col-md-3">
                                <h5>Creator</h5>
                                <span>{{ $product->user }}</span>
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
                <a href="{{ route('product.edit', ['id' => $product->id ]) }}" class="btn btn-primary btn-lg btn-block">Edit
                <i class="fa fa-edit"></i>
                </a>
                <a href="" class="btn btn-danger btn-lg btn-block">Delete
                <i class="ti-trash"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
