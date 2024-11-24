@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Data Klasifikasi Surat</h1>
            <p class="text-muted">Data Surat / <b>Data Klasifikasi Surat</b></p>
        </div>
        <div class="card p-3 bg-light text-primary shadow-lg border-light">
            <div class="d-flex justify-content-start gap-2 align-items-center mb-3">
                <a href="/klasifikasi_letter/create" class="btn btn-primary">Tambah</a>
                <a href="/klasifikasi_letter/export" class="btn btn-success">Eksport Klasifikasi Surat</a>
            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>
                            <div class="text-center">Aksi</div>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
