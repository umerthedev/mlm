@extends('user.dashboard.layout')
@section('dashboard_active', 'active')
@section('content')
    <!-- / Navbar -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('') }}dashboard_assets/assets/img/icons/unicons/chart-success.png"
                                            alt="" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">SELF GROUP</span>
                                <h3 class="card-title mb-2">{{ Auth::user()->direct_group }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('') }}dashboard_assets/assets/img/icons/unicons/wallet-info.png"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">LEVEL GROUP</span>
                                <h3 class="card-title text-nowrap mb-1">{{ Auth::user()->total_group }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('') }}dashboard_assets/assets/img/icons/unicons/paypal.png"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="d-block mb-1">INCOME</span>
                                <h3 class="card-title text-nowrap mb-2">{{ Auth::user()->total_income }}</h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('') }}dashboard_assets//assets/img/icons/unicons/cc-primary.png"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">DITHDRAWL</span>
                                <h3 class="card-title mb-2">{{ Auth::user()->total_withdrawl }}</h3>

                            </div>
                        </div>
                    </div>
                    <!-- </div>
                                                                                                                                                                                <div class="row"> -->

                </div>
            </div>
        </div>
    </div>
@endsection
