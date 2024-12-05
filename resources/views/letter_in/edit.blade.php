@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Edit Data Surat</h1>
            <p class="text-muted">Data Surat / <b>Edit Data Surat</b></p>
        </div>
        <div class="card p-4 bg-light shadow-lg border-light">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Perihal</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Perihal Surat" required>
                </div>
                <div class="mb-3">
                    <label for="klasifikasi" class="form-label fw-bold">Klasifikasi Surat</label>
                    <select name="klasifikasi" id="klasifikasi" class="form-select" required>
                        <option selected disabled>Pilih Klasifikasi</option>
                        <option value="rapat_guru">Rapat Guru</option>
                        <option value="surat_rutin">Surat Rutin</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label fw-bold">Isi Surat</label>
                    <input id="isi" type="hidden" name="isi">
                    <trix-editor input="isi" class="form-control"></trix-editor>
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
                            <tr>
                                <td>Asep</td>
                                <td>
                                    <input type="checkbox" name="peserta[]" value="Udin">
                                </td>
                            </tr>
                            {{-- @foreach ($guru as $item) Loop data guru dari database --}}
                                {{-- <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        <input type="checkbox" name="peserta[]" value="{{ $item->id }}">
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <div class="mb-3">
                    <label for="lampiran" class="form-label fw-bold">Lampiran</label>
                    <input type="file" class="form-control" id="lampiran" name="lampiran" accept=".pdf,.docx,.jpg,.png">
                </div>
                <div class="mb-3">
                    <label for="notuls" class="form-label fw-bold">Notuls</label>
                    <select name="notuls" id="notuls" class="form-select" required>
                        <option selected disabled>Pilih notuls</option>
                        <option value="">Asep</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
