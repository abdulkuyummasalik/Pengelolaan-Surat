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
                    <input type="text" class="form-control" id="letter_perihal" name="letter_perihal"
                        placeholder="Masukkan Perihal Surat" value="{{ old('letter_perihal') }}" required>
                    @error('letter_perihal')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="letter_type_id" class="form-label fw-bold">Klasifikasi Surat</label>
                    <select name="letter_type_id" id="letter_type_id" class="form-select" required>
                        <option selected disabled>Pilih Klasifikasi</option>
                        @foreach ($letterType as $type)
                            <option value="{{ $type->id }}" {{ old('letter_type_id') == $type->id ? 'selected' : '' }}>
                                {{ $type->name_type }}
                            </option>
                        @endforeach
                    </select>
                    @error('letter_type_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label fw-bold">Isi Surat</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                    <trix-editor input="content" class="form-control"></trix-editor>
                    @error('content')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Peserta</label>
                    <table class="table table-borderless table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Guru</th>
                                <th>Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <input type="checkbox" name="recipients[]" value="{{ $item->id }}"
                                            {{ is_array(old('recipients')) && in_array($item->id, old('recipients')) ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @error('recipients')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="attachment" class="form-label fw-bold">Lampiran</label>
                    <input type="file" class="form-control" id="attachment" name="attachment"
                        accept=".pdf,.docx,.jpg,.png">
                    @error('attachment')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="notulis" class="form-label fw-bold">Notulis</label>
                    <select name="notulis" id="notulis" class="form-select" required>
                        <option selected disabled>Pilih Notulis</option>
                        @foreach ($guru as $item)
                            <option value="{{ $item->id }}" {{ old('notulis') == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('notulis')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
