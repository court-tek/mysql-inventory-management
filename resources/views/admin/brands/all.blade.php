@extends('layouts.admin')

@section('title')
  Inventory Management System
@endsection

@section('breadcrumbs')
  <div class="breadcrumbs-area clearfix">
      <h4 class="page-title pull-left">Products</h4>
      <ul class="breadcrumbs pull-left">
          <li><a href="index.html">Dashboard</a></li>
          <li><span>All Brands</span></li>
      </ul>
  </div>
@endsection

@section('content')
<!-- Progress Table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Progress Table</h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Status</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($allProducts as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>
                                  <a href="{{ route('product.show', ['id' => $product->id]) }}">
                                    {{ $product->title }}
                                  </a>
                                </td>
                                <td>{{ $product->user }}</td>

                                <td><span class="status-p bg-primary">pending</span></td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="{{ route('product.edit', ['id' => $product->id]) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="{{ route('product.delete', ['id' => $product->id]) }}" class="text-danger"><i class="ti-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Progress Table end -->
@endsection
