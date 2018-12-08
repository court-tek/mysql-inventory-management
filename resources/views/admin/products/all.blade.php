@extends('layouts.admin')

@section('title')
  Inventory Management System
@endsection

@section('breadcrumbs')
  <div class="breadcrumbs-area clearfix">
      <h4 class="page-title pull-left">Products</h4>
      <ul class="breadcrumbs pull-left">
          <li><a href="index.html">Dashboard</a></li>
          <li><span>All Products</span></li>
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
                                <th scope="col">task</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Progress</th>
                                <th scope="col">status</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>09 / 07 / 2018</td>
                                <td>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td><span class="status-p bg-primary">pending</span></td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>09 / 07 / 2018</td>
                                <td>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td><span class="status-p bg-warning">pending</span></td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                                <td>09 / 07 / 2018</td>
                                <td>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td><span class="status-p bg-success">complate</span></td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                                <td>09 / 07 / 2018</td>
                                <td>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td><span class="status-p bg-warning">panding</span></td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Progress Table end -->
@endsection
