@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Admin Dashboard | Edit User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>
    </nav>
</div>
<x-errorMessage />
<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-12">
            <div class="row">
                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Acount Balance</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>${{number_format($user->account_bal,2) }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Sales <span></span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$user->number_of_sales }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Total Sales <span></span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart text-warning"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$user->total_sales}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Total Product <span></span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bag-check-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$user->total_product}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
            </div>
            <hr>
            <livewire:admin.edit-user-account :user_data="$user" />
            <hr>
            <livewire:admin.transactions :user_data="$user" />
        </div>
    </div>
</section>


@endsection