@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Data Klasifikasi Surat</h1>
            <p class="text-muted">Data Surat / <b>Data Klasifikasi Surat</b></p>
        </div>

        @if (Session::get('success'))
            <div class="d-flex justify-content-center mb-2">
                <div class="alert alert-primary text-center w-50" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ Session::get('success') }}
                </div>
            </div>
        @endif

        @if (Session::get('deleted'))
            <div class="d-flex justify-content-center mb-2">
                <div class="alert alert-danger text-center w-50" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ Session::get('deleted') }}
                </div>
            </div>
        @endif

        <div class="card p-3 bg-light text-primary shadow-lg border-light">
            <div class="d-flex justify-content-start gap-2 align-items-center mb-3">
                <a href="{{ route('klasifikasi_letter.create') }}" class="btn btn-primary">Tambah</a>
                <a href="{{ route('klasifikasi_letter.export') }}" class="btn btn-success">Eksport Klasifikasi Surat</a>
            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Surat</th>
                        <th>Klasifikasi Surat</th>
                        <th>Surat Tertaut</th>
                        <th>
                            <div class="text-center">Aksi</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lettersType as $index => $letter)
                        <tr>
                            <td>{{ ($lettersType->currentPage() - 1) * $lettersType->perPage() + ($index + 1) }}</td>
                            <td>{{ $letter->letter_code }}</td>
                            <td>{{ $letter->name_type }}</td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('klasifikasi_letter.show', $letter->id) }}"
                                        class="btn btn-success me-2">Lihat</a>
                                    <a href="{{ route('klasifikasi_letter.edit', $letter->id) }}"
                                        class="btn btn-warning me-2">Edit</a>
                                    <form action="{{ route('klasifikasi_letter.destroy', $letter->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center my-3">
                <p class="mb-0 text-primary">
                    Halaman {{ $lettersType->currentPage() }} dari {{ $lettersType->lastPage() }} halaman
                </p>
                <div>
                    {{ $lettersType->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
