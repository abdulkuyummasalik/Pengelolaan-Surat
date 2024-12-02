@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Tambah Data Surat</h1>
            <p class="text-muted">Data Surat / <b>Tambah Data Surat</b></p>
        </div>

        <div class="card p-4 bg-light shadow-lg border-light">
            <form action="{{ route('letters.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="letter_perihal" class="form-label fw-bold">Perihal</label>
                    <input type="text" class="form-control" id="letter_perihal" name="letter_perihal" placeholder="Masukkan Perihal Surat" required>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="letter_type_id" class="form-label fw-bold">Klasifikasi Surat</label>
                        <select name="letter_type_id" id="letter_type_id" class="form-select" required>
                            <option selected disabled>Pilih Klasifikasi</option>
                            @foreach ($letterType as $type)
                                <option value="{{ $type->id }}">{{ $type->name_type }}</option>
                            @endforeach
                        </select>
                    </div>                    
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label fw-bold">Isi Surat</label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content" class="form-control"></trix-editor>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Peserta</label>
                    <table class="table table-borderless table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Guru</th>
                                <th>Peserta(Ya / Tidak)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <input type="checkbox" name="recipients[]" value="{{ $item->id }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>                        
                    </table>
                </div>
                <div class="mb-3">
                    <label for="attachment" class="form-label fw-bold">Lampiran</label>
                    <input type="file" class="form-control" id="attachment" name="attachment" accept=".pdf,.docx,.jpg,.png">
                </div>
                <div class="mb-3">
                    <label for="notulis" class="form-label fw-bold">Notulis</label>
                    <select name="notulis" id="notulis" class="form-select" required>
                        <option selected disabled>Pilih Notulis</option>
                        @foreach ($guru as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>                
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
