@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Tambah Data Guru</h1>
            <p class="text-muted">Data User / Data Guru / <b>Tambah Data Guru</b></p>
        </div>
        <div class="card p-3 bg-light shadow-lg border-light">
            <form action="{{ route('teacher.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">Tambah</button>
            </div>
            </form>
        </div>
    </div>
@endsection
