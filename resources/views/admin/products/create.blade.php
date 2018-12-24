@extends('layouts.admin') @section('title') Inventory Management System @endsection @section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Create Products</h4>
    <ul class="breadcrumbs pull-left">
        <li><a>Dashboard</a></li>
        <li><a href="{{ route('product.all') }}">All Products</a></li>
        <li><span>All Products</span></li>
    </ul>
</div>
@endsection @section('content')
<!-- Progress Table start -->
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
              <form action="{{ route('product.store') }}" method="post">
                <h4 class="header-title">Textual inputs</h4>
                <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Title</label>
                    <input class="form-control" name="title" type="text" value="" id="example-text-input">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Image URL</label>
                    <input class="form-control" name="img_url" type="text" value="" id="example-text-input">
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 col-md-6">
                    <label for="example-text-input" class="col-form-label">Sku</label>
                    <input class="form-control" name="sku" type="text" value="" id="example-text-input">
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <label for="example-text-input" class="col-form-label">Material</label>
                    <input class="form-control" name="material" type="text" value="" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-12 col-md-4">
                    <label for="example-text-input" class="col-form-label">Size</label>
                    <select class="custom-select" name="size">
                      <option value="7" selected="selected">7</option>
                      <option  value="7.5">7.5</option>
                      <option  value="8">8</option>
                      <option  value="8.5">8.5</option>
                      <option  value="9">9</option>
                      <option  value="9.5">9.5</option>
                      <option  value="10">10</option>
                      <option  value="10.5">10.5</option>
                      <option  value="10.5">10.5</option>
                      <option  value="11">11</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-4">
                    <label for="example-text-input" class="col-form-label">Quantity</label>
                    <input class="form-control" name="qty" type="text" value="" id="example-text-input">
                </div>
                <div class="col-sm-12 col-md-4">
                  <label class="col-form-label">Brands</label>
                  <select class="custom-select" name="brands">
                    <option value="1" selected="selected">Nike</option>
                    <option  value="2">Adidas</option>
                    <option  value="3">Puma</option>
                    <option  value="4">Clarks</option>
                  </select>
                </div>
              </div>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Description</label>
                    <textarea class="form-control" name="description" type="text" value="" id="example-text-input"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                </div>
                {{ csrf_field() }}
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Progress Table end -->
@endsection
