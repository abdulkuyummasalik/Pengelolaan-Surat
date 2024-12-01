@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <!-- Header Section -->
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Dashboard</h1>
            <p class="text-muted">Home / <b>Dashboard</b></p>
        </div>

        <!-- Alert Section -->
        @if (Session::get('success'))
        <div class="d-flex justify-content-center mb-2">
            <div class="alert alert-primary text-center w-50" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> {{ Session::get('success') }}
            </div>
        </div>
        @endif
        @if (Session::get('failed'))
        <div class="d-flex justify-content-center mb-2">
            <div class="alert alert-danger text-center w-50" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> {{ Session::get('failed') }}
            </div>
        </div>
        @endif

        <!-- Cards Section -->
        <div class="row g-4">
            <!-- Surat Keluar -->
            <div class="col-md-6 col-lg-8">
                <div class="card p-3 bg-light text-primary h-100 shadow-lg border-light">
                    <div class="card-body">
                        <h5 class="card-title">Surat Keluar</h5>
                        <div class="pt-3 d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center  bg-opacity-25"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-send-fill text-primary fs-4"></i>
                            </div>
                            <h1 class="mb-0">0</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Klasifikasi Surat -->
            <div class="col-md-6 col-lg-4">
                <div class="card p-3 bg-light text-primary h-100 shadow-lg border-light">
                    <div class="card-body">
                        <h5 class="card-title">Klasifikasi Surat</h5>
                        <div class="pt-3 d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center  bg-opacity-25"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-file-text-fill text-primary fs-4"></i>
                            </div>
                            <h1 class="mb-0">{{ $letterType }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Staff Tata Usaha -->
            <div class="col-md-6 col-lg-4">
                <div class="card p-3 bg-light text-primary h-100 shadow-lg border-light">
                    <div class="card-body">
                        <h5 class="card-title">Staff Tata Usaha</h5>
                        <div class="pt-3 d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center  bg-opacity-25"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-people-fill text-primary fs-4"></i>
                            </div>
                            <h1 class="mb-0">{{ $staffCount }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guru -->
            <div class="col-md-6 col-lg-8">
                <div class="card p-3 bg-light text-primary h-100 shadow-lg border-light">
                    <div class="card-body">
                        <h5 class="card-title">Guru</h5>
                        <div class="pt-3 d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center  bg-opacity-25"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-book-fill text-primary fs-4"></i>
                            </div>
                            <h1 class="mb-0">{{ $guruCount }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
