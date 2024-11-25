@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Data Guru</h1>
            <p class="text-muted">Data User / <b>Data Guru</b></p>
        </div>

        @if (Session::get('success'))
            <div class="d-flex justify-content-center mb-2">
                <div class="alert alert-primary text-center w-50" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ Session::get('success') }}
                </div>
            </div>
        @endif

        <div class="card p-3 bg-light text-primary shadow-lg border-light">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('teacher.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>
                            <div class="text-center">Aksi</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="" class="btn btn-warning me-2">Edit</a>
                                    {{-- {{ route('teacher.edit', $user->id) }} --}}
                                    <form action="" method="POST">
                                        {{-- {{ route('teacher.destroy', $user->id) }} --}}
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
        </div>
    </div>
@endsection
