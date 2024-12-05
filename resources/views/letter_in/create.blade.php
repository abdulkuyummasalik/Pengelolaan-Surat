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
                    <label class="form-label fw-normal">Kehadiran :</label>
                    <table class="table table-borderless table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Guru</th>
                                <th>Ceklis jika <b>"Hadir"</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($letter as $item)
                                @if ($item->recipients)
                                    @php
                                        $recipients = json_decode($item->recipients);
                                    @endphp
                                    @foreach ($recipients as $recipient)
                                        <tr>
                                            <td>{{ $recipient->name }}</td>
                                            <td>
                                                <input type="checkbox" name="recipients[]" value="{{ $recipient->name }}"
                                                    {{ is_array(old('recipients')) && in_array($recipient->name, old('recipients')) ? 'checked' : '' }}>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach
                        </tbody>
                        
                    </table>
                    @error('recipients')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label fw-bold">Ringkasan Hasil Rapat</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                    <trix-editor input="content" class="form-control"></trix-editor>
                    @error('content')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
