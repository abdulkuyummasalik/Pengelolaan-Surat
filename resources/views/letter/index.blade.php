@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Data Surat</h1>
            <p class="text-muted">Data Surat / <b>Data Surat</b></p>
        </div>
        <div class="card p-3 bg-light text-primary shadow-lg border-light">
            <div class="d-flex justify-content-start gap-2 align-items-center mb-3">
                <a href="create" class="btn btn-primary">Tambah</a>
                <a href="export" class="btn btn-success">Eksport Data Surat</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Tanggal Keluar</th>
                            <th>Penerima Surat</th>
                            <th>Notulis</th>
                            <th>Hasil Rapat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($letter as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->letterType->letter_code ?? '-' }}/SMKWIKRAMA/2024</td>
                                <td>{{ $item->letter_perihal }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                                <td>
                                    @if ($item->recipients)
                                        @foreach (json_decode($item->recipients) as $recipient)
                                            <span>{{ $recipient->name }}</span>@if (!$loop->last), @endif
                                        @endforeach
                                    @else
                                        Tidak ada penerima
                                    @endif
                                </td>
                                <td>{{ $item->notulisUser->name ?? 'Tidak Diketahui' }}</td>
                                <td class="{{ $item->result_rapat ? 'text-success' : 'text-danger' }}">
                                    {{ $item->result_rapat ? 'Sudah Dibuat' : 'Belum Dibuat' }}
                                </td>                                                                <td class="text-center">
                                    <a href="{{ route('letters.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('letters.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('letters.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>            
        </div>
    </div>
@endsection
