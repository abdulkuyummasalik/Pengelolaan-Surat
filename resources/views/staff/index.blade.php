@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="mb-5 text-primary">
            <h1 class="fw-bold">Data Staff Tata Usaha </h1>
            <p class="text-muted">Data User / <b>Data Staff Tata Usaha : {{ $staffCount }}</b></p>
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
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('staff.create') }}" class="btn btn-primary">Tambah</a>
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
                    @foreach ($users as $index => $user)
                        <tr>
                            <td>{{ ($users->currentPage() - 1) * $users->perPage() + ($index + 1) }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>Staff Tata Usaha</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('staff.edit', $user->id) }}" class="btn btn-warning me-2">Edit</a>
                                    <form action="{{ route('staff.destroy', $user->id) }}" method="POST">
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
                    Halaman {{ $users->currentPage() }} dari {{ $users->lastPage() }} halaman
                </p>
                <div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
