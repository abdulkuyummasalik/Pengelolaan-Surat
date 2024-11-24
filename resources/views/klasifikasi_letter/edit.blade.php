@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Edit Data Klasifikasi Surat</h1>
            <p class="text-muted">Data Surat / Data Klasifikasi Surat / <b>Edit Data Klasifikasi Surat</b></p>
        </div>
        <div class="card p-3 bg-light shadow-lg border-light">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="code" class="col-sm-2 col-form-label">Kode Surat</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>
                <div class="mb-3">
                    <label for="klasifikasi" class="col-sm-2 col-form-label">Klasifikasi Surat</label>
                    <input type="klasifikasi" class="form-control" id="klasifikasi" name="klasifikasi">
                </div>
                <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">Edit</button>
            </div>
            </form>
        </div>
    </div>
@endsection
