@extends('layouts.admin')

@section('title')
  Inventory Management System
@endsection

@section('breadcrumbs')
  <div class="breadcrumbs-area clearfix">
      <h4 class="page-title pull-left">Brands</h4>
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
                          @foreach ($allBrands as $brand)
                            <tr>
                                <th scope="row">{{ $brand->id }}</th>
                                <td>
                                  <a href="{{ route('brand.show', ['id' => $brand->id]) }}">
                                    {{ $brand->title }}
                                  </a>
                                </td>
                                <td>{{ $brand->user }}</td>

                                <td><span class="status-p bg-primary">pending</span></td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="{{ route('brand.edit', ['id' => $brand->id]) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="{{ route('brand.delete', ['id' => $brand->id]) }}" class="text-danger"><i class="ti-trash"></i></a></li>
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
