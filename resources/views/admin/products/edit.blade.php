@extends('layouts.admin') @section('title') Inventory Management System @endsection @section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Create Products</h4>
    <ul class="breadcrumbs pull-left">
        <li><a>Dashboard</a></li>
        <li><a href="{{ route('product.all') }}">All Products</a></li>
        @foreach ($Products as $prod)
          <li><span>Edit: {{$prod->title}}</span></li>
        @endforeach
    </ul>
</div>
@endsection @section('content')
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            @foreach ($Products as $product)
            <div class="card-body">
                <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST">
                  {{ method_field('PUT') }}
                    <h4 class="header-title">Textual inputs</h4>
                    <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Title</label>
                        <input class="form-control" name="title" type="text" value="{{$product->title}}" id="example-text-input">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Image URL</label>
                        <input class="form-control" name="img_url" type="text" value="{{$product->img_url}}" id="example-text-input">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6">
                            <label for="example-text-input" class="col-form-label">Sku</label>
                            <input class="form-control" name="sku" type="text" value="{{$product->sku}}" id="example-text-input">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="example-text-input" class="col-form-label">Material</label>
                            <input class="form-control" name="material" type="text" value="{{$product->material}}" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-4">
                            <label for="example-text-input" class="col-form-label">Size</label>
                            <select class="custom-select" name="size">
                        <option value="7"
                        {{$product->size == 7 ? 'selected="selected"': ''}}>7</option>
                        <option  value="7.5"
                        {{$product->size == 7.5 ? 'selected="selected"': ''}}>7.5</option>
                        <option  value="8"
                        {{$product->size == 8 ? 'selected="selected"': ''}}>8</option>
                        <option  value="8.5"
                        {{$product->size == 8.5 ? 'selected="selected"': ''}}>8.5</option>
                        <option  value="9"
                        {{$product->size == 9 ? 'selected="selected"': ''}}>9</option>
                        <option  value="9.5"
                        {{$product->size == 9.5 ? 'selected="selected"': ''}}>9.5</option>
                        <option  value="10"
                        {{$product->size == 10 ? 'selected="selected"': ''}}>10</option>
                        <option  value="10.5"
                        {{$product->size == 10.5 ? 'selected="selected"': ''}}>10.5</option>
                        <option  value="10.5"
                        {{$product->size == 11 ? 'selected="selected"': ''}}>11</option>
                        <option  value="11"
                        {{$product->size == 11.5 ? 'selected="selected"': ''}}>11.5</option>
                      </select>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="example-text-input" class="col-form-label">Quantity</label>
                            <input class="form-control" name="qty" type="text" value="{{$product->qty}}" id="example-text-input">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="col-form-label">Brands</label>
                            <select class="custom-select" name="brand_id">
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
            @endforeach
        </div>
    </div>
</div>
@endsection
