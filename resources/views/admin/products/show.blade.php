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
<!-- Progress Table start -->
<div class="row">
    <div class="col-md-9 mt-5">
        <div class="card">
            <div class="card-body">
              <div style="width: 100%; height: 300px; background: black;"></div>
              <img src="" class="show-Products-img">
              <h2>Title</h2>
              <p>Description</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-5">
        <div class="card">
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
<!-- Progress Table end -->
@endsection
