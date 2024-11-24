@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Data Guru</h1>
            <p class="text-muted">Data User / <b>Data Guru</b></p>
        </div>
        <div class="card p-3 bg-light text-primary shadow-lg border-light">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="/teacher/create" class="btn btn-primary">Tambah</a>
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
