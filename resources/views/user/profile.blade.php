@php
use App\Models\Tahun_ajaran;
use App\Models\Setting_kelas_siswa;
use App\Models\Setting_jadwal_absen;
use App\Models\Data_absen;
@endphp
@extends('layouts.app')
@section('content')
 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">

                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name font-weight-bolder">Yuna</span><span
                                class="user-status"></span></div><span
                            class="avatar"><img class="round"
                                src="http://127.0.0.1:8000/images/profile_user/user.webp" alt="avatar" height="40"
                                width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="/user"><i class="mr-50" data-feather="user"></i>
                            Profile</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout"><i class="mr-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->

 <!-- BEGIN: Main Menu-->
 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                        <img src="https://pbs.twimg.com/profile_images/1163911054788833282/AcA2LnWL_400x400.jpg" height="40" width="40">
                        <h3 class="brand-text">Projek</h3>
                    </a></li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <hr>
                

                
                    
                                            <li class="active nav-item">
                        
                    <a class="d-flex align-items-center" href="/dashboard"><i
                            data-feather="pie-chart"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Dashboard</span>
                    </a>
                
                    
                                            <li class=" nav-item">
                    
                    <a class="d-flex align-items-center" href="/settings"><i
                            data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Friends and Groups</span>
                    </a>
                
                    
               
                
                
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="app-user-view">
                    <!-- User Card & Plan Starts -->
                    <div class="row">
                        <!-- User Card starts-->
                        <div class="col-xl-12">
                            <div class="card user-card">
                                <form action="{{ url('user/' . $user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-12 media mb-2">
                                                <img src="{{ asset('/images/profile_user/' . $user->image) }}"
                                                    alt="users avatar"
                                                    class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer"
                                                    height="90" width="90">
                                                <div class="media-body mt-50">
                                                    <h4>{{ $user->name }}</h4>
                                                    <div class="col-12 d-flex mt-1 px-0">
                                                        <label class="btn btn-primary mr-75 mb-0" for="change-picture">
                                                            <span class="d-none d-sm-block">Change</span>
                                                            <input class="form-control" type="file" id="change-picture"
                                                                hidden="" accept="image/png, image/jpeg, image/jpg"
                                                                name="file">
                                                            <span class="d-block d-sm-none">
                                                                <i class="mr-0" data-feather="edit"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-12 mt-2 mt-xl-0">
                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Nama</label>
                                                            <input type="text" class="form-control" placeholder="Username"
                                                                value="{{ $user->name }}" name="name" id="username">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Email</label>
                                                            <input type="email" class="form-control" placeholder="Name"
                                                                value="{{ $user->email }}" name="email" id="name" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ml-2 mt-1">
                                                <button class="btn btn-success btn-icon"
                                                    onclick="return confirm('Profile anda akan dirubah?')"><i
                                                        data-feather="save"></i>
                                                    Save
                                                    change</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /User Card Ends-->

                        <!-- Plan Card starts-->
                        {{-- <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="card plan-card border-primary">
                                <div class="card-header d-flex justify-content-between align-items-center pt-75 pb-1">
                                    <h5 class="mb-0">Status Kehadiran </h5>
                                    <span class="badge badge-light-secondary" data-toggle="tooltip" data-placement="top"
                                        title="Expiry Date">{{ date('Y-m-d') }}<span class="nextYear"></span>
                                    </span>
                                </div>
                                <div class="card-body text-center">



                                </div>
                            </div>
                        </div> --}}
                        <!-- /Plan CardEnds -->
                    </div>
                    <!-- User Card & Plan Ends -->
                    <!-- pricing free trial -->
                    <div class="pricing-free-trial">
                        <div class="row">
                            <div class="col-12 col-lg-10 col-lg-offset-3 mx-auto">
                                <div class="pricing-trial-content d-flex justify-content-between">
                                    <div class="text-center text-md-left mt-3">
                                        <h1 class="text-primary">Welcome </h1>
                                            <h5></h5>
                                            
                            </div>
                        </div>
                    </div>
                    <!--/ pricing free trial -->
                    <!-- User Timeline & Permissions Starts -->
                    <!-- information starts -->


                </section>

            </div>
        </div>
    </div>
@endsection

@push('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/forms/form-wizard.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/forms/pickers/form-flat-pickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/app-user.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/page-pricing.min.css') }}">
@endpush

@push('script')


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('/js/core/app.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/js/scripts/pages/app-user-edit.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/components/components-navs.min.js') }}"></script>
@endpush
