@extends('layouts.admin')

@section('title')
  Inventory Management System
@endsection

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Create Products</h4>
    <ul class="breadcrumbs pull-left">
        <li><a>Dashboard</a></li>
        <li><a href="{{ route('product.all') }}">All Products</a></li>
        <li><span>All Products</span></li>
    </ul>
</div>
@endsection

@section('content')
<!-- Progress Table start -->
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Textual inputs</h4>
                <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Text</label>
                    <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Progress Table end -->
@endsection
