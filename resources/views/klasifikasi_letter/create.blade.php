@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Tambah Data Klasifikasi Surat</h1>
            <p class="text-muted">Data Surat / Data Klasifikasi Surat / <b>Tambah Data Klasifikasi Surat</b></p>
        </div>
        <div class="card p-3 bg-light shadow-lg border-light">
            <form action="{{ route('klasifikasi_letter.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="letter_code" class="col-sm-2 col-form-label">Kode Surat</label>
                    <input type="text" class="form-control" id="letter_code" name="letter_code"
                        value="{{ $letterCode }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name_type" class="col-sm-2 col-form-label">Klasifikasi Surat</label>
                    <select name="name_type" id="name_type" class="form-select">
                        <option selected disabled>Pilih Klasifikasi</option>
                        <option value="rapat_guru">Rapat Guru</option>
                        <option value="surat_rutin">Surat Rutin</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
