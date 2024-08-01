@extends('layouts.users')

@section('content')
<div class="pagetitle">
    <h1> Dashboard </h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>
<div class="alert alert-light my-3" role="alert" style="background-color: rgb(217, 217, 217)">
    <h6 style="color: #FF9900;" class="m-0">COVID-19 Related Announcements</h6>
    <span style="font-size: 13px">Stay informed of changes that may impact your business at amazon</span>
</div>
<x-error-message />
<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-12">
            <div class="row">
                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Balance <span>| USD</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>${{number_format(auth()->user()->account_bal,2) }}</h6>
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
                                    <h6>{{auth()->user()->number_of_sales}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Total Sales <span> </span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart text-warning"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{auth()->user()->total_sales}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Total Product <span> </span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bag-check-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{auth()->user()->total_product}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
            </div>
            <div class="flex-container-user">
                <div class="flex-item-user">
                    <h6><b>Product</b></h6>
                    <br>
                    <p class="m-0"><b>USD</b></p>
                    <span>Last 30 days</span>
                </div>
                <div class="flex-item-user">
                    <h6><b><i class="bi bi-caret-down-fill me-2"></i>  Last 30 Days</b></h6>
                    <br>
                    <p class="m-0 text-success"><b>+{{auth()->user()->last_30_days}} %</b></p>
                    <span>Previous 30 days</span>
                </div>
                <div class="flex-item-user">
                    <h6><b><i class="bi bi-caret-down-fill me-2"></i> </b></h6>
                    <br>
                    <p class="m-0 text-success"><b>+{{auth()->user()->last_year}} %</b></p>
                    <span>Last year</span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="card">
                    <div class="row pt-3">
                        <div class="col-md-11 col-11">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <a href="{{route('add_product')}}">
                                        <li class="list-group-item d-flex flex-row justify-content-between  p-3 my-2 rounded-1"
                                            style="background-color: #051C5F;">
                                            <div class="text-white">Add a Product</div>
                                            <div><i class="bi bi-arrow-right-circle-fill text-white"></i></div>
                                        </li>
                                    </a>

                                    <a href="mailto:support@beginnersfba.online">
                                        <li class="list-group-item d-flex flex-row justify-content-between p-3 my-2 rounded-1"
                                            style="background-color: #051C5F;">
                                            <div class="text-white">Manage
                                                Orders</div>
                                            <div><i class="bi bi-arrow-right-circle-fill text-white"></i></div>
                                        </li>
                                    </a>
                                    <a href="mailto:support@beginnersfba.online">
                                        <li class="list-group-item d-flex flex-row justify-content-between p-3 my-2 rounded-1"
                                            style="background-color: #051C5F;">
                                            <div class="text-white">Manage
                                                Returns</div>
                                            <div><i class="bi bi-arrow-right-circle-fill text-white"></i></div>
                                        </li>
                                    </a>
                                    <a href="{{route('affiliate_marketing')}}">
                                        <li class="list-group-item d-flex flex-row justify-content-between p-3 my-2 rounded-1"
                                            style="background-color: #051C5F;">
                                            <div class="text-white"> Affiliate Marketing </div>
                                            <div><i class="bi bi-arrow-right-circle-fill text-white"></i></div>
                                        </li>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#fund">
                                        <li class="list-group-item d-flex flex-row justify-content-between p-3 my-2 rounded-1"
                                            style="background-color: #051C5F;">
                                            <div class="text-white">Add Funds</div>
                                            <div><i class="bi bi-arrow-right-circle-fill text-white"></i></div>
                                        </li>
                                    </a>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<livewire:user.fund-modal />
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementById('copyButton').addEventListener('click', function() {
            var copyText = document.getElementById('copyAddress');

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            document.execCommand("copy");

            // Change button text to "Copied"
            this.textContent = 'Copied';

            // Optional: change the button text back to "Copy" after 3 seconds
            setTimeout(() => {
                this.textContent = 'Copy';
            }, 3000);
        });
    });
</script>

@endsection