@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Detail Klasifikasi Surat</h1>
            <p class="text-muted">Home / Data Klasifikasi Surat / <b>Detail Klasifikasi Surat</b></p>
        </div>

        <div class="mb-3">
            <h2 class="fw-bold  text-primary">{{ $letter->letter_code }} | <span
                    class=" text-muted">{{ $letter->name_type }}</span></h2>
        </div>
        <div class="card p-4 shadow-lg border-light w-50">
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <h5 class="fw-bold text-primary">Rapat Rutin</h5>
                </div>
                <div class="text-end">
                    <a href="{{ route('klasifikasi_letter.download-pdf', $letter->id) }}"
                        class="btn btn-primary btn-sm">Download <i class="bi bi-download"></i></a>
                </div>

            </div>
            <div class="mb-3">
                <p class="">{{ \Carbon\Carbon::parse($letter->created_at)->format('d M Y') }}</p>

                <ul>
                    @foreach ($guru as $g)
                        <li>{{ $g->name }}</li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
@endsection
