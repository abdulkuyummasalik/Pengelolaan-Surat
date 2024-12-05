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
                                            <span>{{ $recipient->name }}</span>
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    @else
                                        Tidak ada penerima
                                    @endif
                                </td>
                                <td>{{ $item->notulisUser->name ?? 'Tidak Diketahui' }}</td>
                                <td class="{{ $item->result_rapat ? 'text-success' : 'text-warning' }}">
                                    @if ($item->result_rapat)
                                        Sudah Dibuat
                                    @else
                                        <a href="{{ route('letter_in.create', $item->id) }}" class="btn border-warning btn-sm text-warning hover:btn-primary">Buat Rapat
                                            Disini</a>
                                    @endif
                                </td>
                                <td class="text-center align-items-center">
                                    <a href="{{ route('letters.show', $item->id) }}"
                                        class="text-primary me-2 text-decoration-none">Lihat</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
