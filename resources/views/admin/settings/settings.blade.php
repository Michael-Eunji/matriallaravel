@php
use App\Models\Transaksi;
use App\Models\Data_komisi;
@endphp

@extends('layouts.app')
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
    
@endpush
@section('content')
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
                    
                    <a class="d-flex align-items-center" href=""><i
                            data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Friends and Groups</span>
                    </a>
                
             
                
                
                
            </ul>
        </div>
    </div>

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <div class="alert-body">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <section class="modern-vertical-wizard">
                    <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
                        <div class="bs-stepper-header">

                            <div class="step" data-target="#account-details-vertical-modern">
                                <button type="button" class="step-trigger">     
                            </div>
                            <div class="step" data-target="#address-step-vertical-modern1">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="user-check" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Friends</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#address-step-vertical-modern">
                                <button type="button" class="step-trigger">
                        
                            </div>
                            <div class="step" data-target="#address-step-vertical-modern2">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="home" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Groups</span>
                                
                                    </span>
                                </button>
                            </div>

                        </div>
                        <div class="bs-stepper-content">
                            <div id="address-step-vertical-modern2" class="content">
                                <div class="content-header">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="mb-0">Groups</h5>
                                            <small>Daftar Groups</small>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button type="button" class="btn btn-primary btn-icon" data-toggle="modal"
                                                data-target="#new-task-modal"><i data-feather="plus"></i>
                                                Tambah Groups
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="form-label" for="vertical-modern-email"><i> Daftar Groups</i></label>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover-animation">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Groups</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tokos as $no => $toko)
                                                        <tr>
                                                            <td>{{ $no + 1 }}</td>
                                                            <td>
                                                                <span
                                                                    class="font-weight-bold">{{ $toko->nama_toko }}</span>
                                                            </td>
                                                            <td>{{ $toko->nama_pemilik }}</td>
                                                            <td>{{ $toko->no_tlp }}</td>
                                                            <td>{{ $toko->alamat }}</td>
                                                            {{-- <td></td> --}}
                                                            <td>
                                                                <button class="btn btn-primary round btn-icon"><i
                                                                        data-feather="edit-2" data-toggle="modal"
                                                                        data-target="#edittoko{{ $toko->id }}"></i></button>
                                                                <button class="btn btn-danger round btn-icon"><i
                                                                        data-feather="trash" data-toggle="modal"
                                                                        data-target="#deletetoko{{ $toko->id }}"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="account-details-vertical-modern" class="content">

                                <div class="content-header">
                                    <h5 class="mb-0"></h5>
                                    <small class="text-muted"></small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <form action="{{ url('settings') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                           
                                         
                                            <div class="d-flex justify-content-between">
                                               
                                                   
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-7">
                                        <label class="form-label" for="vertical-modern-email"><i></i></label>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover-animation">
                                                <thead>
                                                    <tr>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($hargas as $no => $harga)
                                                        @if ($no == 0)
                                                            <tr class="table-success">

                                                            @else
                                                            <tr>

                                                        @endif
                                                        <td>{{ $no + 1 }}</td>
                                                        <td>Rp. {{ $harga->harga }}</td>
                                                        <td>{{ $harga->tanggal }}</td>
                                                        <td>{{ $harga->keterangan }}</td>
                                                        <td>
                                                            <button class="btn btn-danger round btn-icon"><i
                                                                    data-feather="trash" data-toggle="modal"
                                                                    data-target="#deleteharga{{ $harga->id }}"></i></button>
                                                        </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="personal-info-vertical-modern" class="content">

                                <div class="content-header">
                                    <h5 class="mb-0">Setting biaya kirim</h5>
                                    <small class="text-muted">Masukan biaya pengiriman.</small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <form action="{{ url('settings') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="type" value="kirim">

                                            <div class="form-group">
                                                <label class="form-label" for="">Lokasi / Daerah</label>
                                                <input type="text" id="" name="daerah" class="form-control"
                                                    placeholder="CIREBON" style="text-transform:uppercase" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="">Biaya kirim</label>
                                                <input type="number" id="" name="biaya_kirim" class="form-control"
                                                    placeholder="Rp." required>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button type="submit" class="btn btn-success btn-icon">
                                                    <i data-feather="save" class="align-middle mr-sm-25 mr-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Save</span>
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="col-lg-7">
                                        <label class="form-label" for="vertical-modern-email"><i> Daftar lokasi /
                                                daerah
                                                dengan biaya kirim, untuk merubah data silahkan masukan lokasi / daerah
                                                yang sama</i></label>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover-animation">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Lokasi / Daerah</th>
                                                        <th>Biaya Kirim</th>
                                                        <th>Tanggal</th>
                                                        <th>Hapus</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($biayakirim as $no => $harga)
                                                        {{-- @if ($no == 0)
                                                                <tr class="table-success">

                                                                @else --}}
                                                        <tr>

                                                            {{-- @endif --}}
                                                            <td>{{ $no + 1 }}</td>
                                                            <td>{{ $harga->daerah }}</td>
                                                            <td>Rp. {{ $harga->biaya_kirim }}</td>
                                                            <td>{{ $harga->tanggal }}</td>
                                                            <td>
                                                                <button class="btn btn-danger round btn-icon"><i
                                                                        data-feather="trash" data-toggle="modal"
                                                                        data-target="#deletebiayakirim{{ $harga->id }}"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="address-step-vertical-modern" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Komisi sales</h5>
                                    <small>Masukan data margin dan komisi sales.</small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <form action="{{ url('settings') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="type" value="komisi">

                                            <div class="form-group">
                                                <label class="form-label" for="">Margin penjualan sales</label>
                                                <input type="number" id="" name="margin" class="form-control"
                                                    placeholder="5000" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="">Komisi untuk sales</label>
                                                <input type="number" id="" name="komisi" class="form-control"
                                                    placeholder="Rp." required>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button type="submit" class="btn btn-success btn-icon">
                                                    <i data-feather="save" class="align-middle mr-sm-25 mr-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Save</span>
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="col-lg-7">
                                        <label class="form-label" for="vertical-modern-email"><i> Daftar margin dari
                                                penjualan dan komisi untuk sales.</i></label>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover-animation">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Margin Penjualan</th>
                                                        <th>Komisi</th>
                                                        <th>Tanggal</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($komisis as $no => $komisi)
                                                        <tr>
                                                            <td>{{ $no + 1 }}</td>
                                                            <td>Rp. {{ $komisi->margin }}</td>
                                                            <td>Rp. {{ $komisi->komisi }}</td>
                                                            <td>{{ $komisi->tanggal }}</td>
                                                            <td>
                                                                <button class="btn btn-primary round btn-icon"><i
                                                                        data-feather="edit" data-toggle="modal"
                                                                        data-target="#editkomisi{{ $komisi->id }}"></i></button>

                                                                <button class="btn btn-danger round btn-icon"><i
                                                                        data-feather="trash" data-toggle="modal"
                                                                        data-target="#deletekomisi{{ $komisi->id }}"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="address-step-vertical-modern1" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Daftar Friends</h5>
                                    <small></small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="form-label" for="vertical-modern-email"><i> Daftar Friends
                                    </i></label>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover-animation">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sales as $no => $sls)
                                                        @if ($sls->user_role_id == 2 || $sls->user_role_id == 1)
                                                            <tr class="table-success">
                                                            @else
                                                            <tr class="table-secondary">
                                                        @endif
                                                        <td>{{ $no + 1 }}</td>
                                                        <td>
                                                            <img src="{{ asset('/images/profile_user/' . $sls->image) }}"
                                                                class="mr-75" height="20" width="20"
                                                                alt="Angular">
                                                            <span class="font-weight-bold">{{ $sls->name }}</span>
                                                        </td>
                                                        <td>
                                                       

                                                            <button class="btn btn-danger round btn-icon"><i
                                                                    data-feather="trash" data-toggle="modal"
                                                                    data-target="#deletesls{{ $sls->id }}"></i></button>
                                                        </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="barang" class="content">
                                <div class="content-header">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="mb-0">Barang</h5>
                                            <small>Daftar barang.</small>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button type="button" class="btn btn-primary btn-icon" data-toggle="modal"
                                                data-target="#addbarang"><i data-feather="plus"></i>
                                                Add Barang
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="form-label" for="vertical-modern-email"><i> Daftar
                                                barang.</i></label>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-hover-animation">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Barang</th>
                                                        <th>Ukuran</th>
                                                        <th>Keterangan</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($barangs as $no => $barang)
                                                        <tr>
                                                            <td>{{ $no + 1 }}</td>
                                                            <td>
                                                                <span
                                                                    class="font-weight-bold">{{ $barang->nama_barang }}</span>
                                                            </td>
                                                            <td>{{ $barang->ukuran }}</td>
                                                            <td>{{ $barang->keterangan }}</td>
                                                            <td>
                                                                <button class="btn btn-primary round btn-icon"><i
                                                                        data-feather="edit-2" data-toggle="modal"
                                                                        data-target="#editbarang{{ $barang->id }}"></i></button>
                                                                <button class="btn btn-danger round btn-icon"><i
                                                                        data-feather="trash" data-toggle="modal"
                                                                        data-target="#deletebarang{{ $barang->id }}"></i></button>
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
                    </div>
                </section>

            </div>
        </div>
    </div>


    {{-- modal tambah toko --}}
    <div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal">
        <div class="modal-dialog sidebar-lg">
            <div class="modal-content p-0">
                <div class="modal-header align-items-center mb-1">
                    <h5 class="modal-title">Tambah Groups</h5>
                    <div class="todo-item-action justify-content-end">
                        <button type="button" class="close font-large-1 font-weight-normal py-0" data-dismiss="modal"
                            aria-label="Close">
                            ??
                        </button>
                    </div>
                </div>
                <form action="{{ url('settings') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="type" value="toko">
                    <div class="modal-body flex-grow-1 pb-sm-0 pb-3">

                        <div class="action-tags">
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Nama Groups</label>
                                <input type="text" id="todoTitleAdd" name="nama_toko"
                                    class="new-todo-item-title form-control" placeholder="Nama Groups" required>
                            </div>
                            
                        
                            </div>
                        </div>
                        <div class="form-group my-1">
                            <button type="submit" class="btn btn-primary add-todo-item mr-1">Add</button>
                            <button type="button" class="btn btn-outline-secondary add-todo-item" data-dismiss="modal">
                                Cancel
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal tambah barang --}}
    <div class="modal modal-slide-in sidebar-todo-modal fade" id="addbarang">
        <div class="modal-dialog sidebar-lg">
            <div class="modal-content p-0">
                <div class="modal-header align-items-center mb-1">
                    <h5 class="modal-title">Add Barang</h5>
                    <div class="todo-item-action justify-content-end">
                        <button type="button" class="close font-large-1 font-weight-normal py-0" data-dismiss="modal"
                            aria-label="Close">
                            ??
                        </button>
                    </div>
                </div>
                <form action="{{ url('settings') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="type" value="barang">
                    <div class="modal-body flex-grow-1 pb-sm-0 pb-3">

                        <div class="action-tags">
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Nama Barang</label>
                                <input type="text" id="todoTitleAdd" name="nama_barang"
                                    class="new-todo-item-title form-control" value="Bata hebel" required>
                            </div>
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Tipe Barang</label>
                                <input type="text" id="todoTitleAdd" name="tipe_barang"
                                    class="new-todo-item-title form-control" placeholder="Premium" required>
                            </div>
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Ukuran</label>
                                <input type="text" id="todoTitleAdd" name="ukuran" class="new-todo-item-title form-control"
                                    placeholder="10 x 7,5">
                            </div>
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group my-1">
                            <button type="submit" class="btn btn-primary add-todo-item mr-1">Add</button>
                            <button type="button" class="btn btn-outline-secondary add-todo-item" data-dismiss="modal">
                                Cancel
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @foreach ($tokos as $toko)
        <div class="modal modal-slide-in sidebar-todo-modal fade" id="edittoko{{ $toko->id }}">
            <div class="modal-dialog sidebar-lg">
                <div class="modal-content p-0">
                    <div class="modal-header align-items-center mb-1">
                        <h5 class="modal-title">Edit Groups</h5>
                        <div class="todo-item-action justify-content-end">
                            <button type="button" class="close font-large-1 font-weight-normal py-0" data-dismiss="modal"
                                aria-label="Close">
                                ??
                            </button>
                        </div>
                    </div>
                    <form action="{{ url('settings/' . $toko->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="type" value="toko">
                        <div class="modal-body flex-grow-1 pb-sm-0 pb-3">

                            <div class="action-tags">
                                <div class="form-group">
                                    <label for="todoTitleAdd" class="form-label">Nama Toko</label>
                                    <input type="text" id="todoTitleAdd" name="nama_toko"
                                        class="new-todo-item-title form-control" placeholder="Nama toko"
                                        value="{{ $toko->nama_toko }}" required>
                                </div>
                               
                              

                            </div>
                            <div class="form-group my-1">
                                <button type="submit" class="btn btn-primary add-todo-item mr-1">Update</button>
                                <button type="button" class="btn btn-outline-secondary add-todo-item" data-dismiss="modal">
                                    Cancel
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade modal-danger text-left" id="deletetoko{{ $toko->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">Delete Groups</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('settings') }}/{{ $toko->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="type" value="toko">

                        <div class="modal-body">
                            Anda akan menghapus:
                            <br>
                            <br>
                            <strong>Groups: {{ $toko->nama_toko }}</strong><br>
                            <br>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($hargas as $harga)
        <div class="modal fade modal-danger text-left" id="deleteharga{{ $harga->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">Delete harga beli</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('settings') }}/{{ $harga->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="type" value="harga">

                        <div class="modal-body">
                            Anda akan menghapus:
                            <br>
                            <br>
                            <strong>Harga: {{ $harga->harga }}</strong><br>
                            <strong>Keterangan: {{ $harga->keterangan }}</strong>
                            <br>
                            <br>
                            Pastikan data yang akan dihapus tidak digunakan lagi!
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($biayakirim as $biayakirim)
        <div class="modal fade modal-danger text-left" id="deletebiayakirim{{ $biayakirim->id }}" tabindex="-1"
            role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">Delete biaya kirim</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('settings') }}/{{ $biayakirim->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="type" value="kirim">

                        <div class="modal-body">
                            Anda akan menghapus:
                            <br>
                            <br>
                            <strong>Lokasi / Daerah: {{ $biayakirim->daerah }}</strong><br>
                            <strong>Biaya kirim: {{ $biayakirim->biaya_kirim }}</strong>
                            <br>
                            <br>
                            Pastikan data yang akan dihapus tidak digunakan lagi!
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($komisis as $komisi)
        <div class="modal fade modal-warning text-left" id="editkomisi{{ $komisi->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">Edit komisi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('settings') }}/{{ $komisi->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="type" value="komisi">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label" for="">Margin penjualan sales</label>
                                <input type="number" id="" name="margin" class="form-control"
                                    value="{{ $komisi->margin }}" placeholder="5000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="">Komisi untuk sales</label>
                                <input type="number" id="" name="komisi" class="form-control"
                                    value="{{ $komisi->komisi }}" placeholder="Rp." required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success btn-icon">
                                    <i data-feather="save" class="align-middle mr-sm-25 mr-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Update</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade modal-danger text-left" id="deletekomisi{{ $komisi->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">Delete komisi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('settings') }}/{{ $komisi->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="type" value="komisi">

                        <div class="modal-body">
                            Anda akan menghapus:
                            <br>
                            <br>
                            <strong>Margin: {{ $komisi->margin }}</strong><br>
                            <strong>Komisi: {{ $komisi->komisi }}</strong>
                            <br>
                            <br>
                            Pastikan data yang akan dihapus tidak digunakan lagi!
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($sales as $sls)
        <div class="modal fade modal-danger text-left" id="deletesls{{ $sls->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">Delete sales</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('settings') }}/{{ $sls->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="type" value="sales">

                        <div class="modal-body">
                            Anda akan menghapus:
                            <br>
                            <br>
                            <strong>Friends: {{ $sls->name }}</strong><br>
                            <br>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($barangs as $barang)
        <div class="modal fade modal-warning text-left" id="editbarang{{ $barang->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">Edit barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('settings') }}/{{ $barang->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="type" value="barang">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Nama Barang</label>
                                <input type="text" id="todoTitleAdd" name="nama_barang"
                                    class="new-todo-item-title form-control" value="{{ $barang->nama_barang }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Tipe Barang</label>
                                <input type="text" id="todoTitleAdd" name="tipe_barang"
                                    class="new-todo-item-title form-control" placeholder="Premium"
                                    value="{{ $barang->tipe_barang }}" required>
                            </div>
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Ukuran</label>
                                <input type="text" id="todoTitleAdd" name="ukuran" class="new-todo-item-title form-control"
                                    placeholder="10 x 7,5" value="{{ $barang->ukuran }}" required>
                            </div>
                            <div class="form-group">
                                <label for="todoTitleAdd" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="" cols="30"
                                    rows="3">{{ $barang->keterangan }}</textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success btn-icon">
                                    <i data-feather="save" class="align-middle mr-sm-25 mr-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Update</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade modal-danger text-left" id="deletebarang{{ $barang->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">Delete barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('settings') }}/{{ $barang->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="type" value="barang">

                        <div class="modal-body">
                            Anda akan menghapus:
                            <br>
                            <br>
                            <strong>Nama barang: {{ $barang->nama_barang }}</strong><br>
                            <strong>Tipe barang: {{ $barang->tipe_barang }} - {{ $barang->ukuran }}</strong>
                            <br>
                            <br>
                            Pastikan data yang akan dihapus tidak digunakan lagi!
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection


@push('script')


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('/js/core/app.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/js/scripts/forms/form-wizard.min.js') }}"></script>

@endpush
