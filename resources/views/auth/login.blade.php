<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css"
        rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white py-3">
                    <h3 class="mb-0">Login ke Akun</h3>
                </div>
                <div class="card-body p-5">
                    @if (Session::get('success'))
                        <div class="d-flex justify-content-center mb-2">
                            <div class="alert alert-primary text-center w-50" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i> {{ Session::get('success') }}
                            </div>
                        </div>
                    @endif
                    @if (Session::get('failed'))
                        <div class="d-flex justify-content-center mb-2">
                            <div class="alert alert-danger text-center w-50" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i> {{ Session::get('failed') }}
                            </div>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('postlogin') }}">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-envelope-fill text-primary"></i>
                                </span>
                                <input type="email" class="form-control border-start-0" id="email" name="email"
                                    required placeholder="Masukkan email Anda">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-lock-fill text-primary"></i>
                                </span>
                                <input type="password" class="form-control border-start-0" id="password"
                                    name="password" required placeholder="Masukkan password Anda">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 mt-3 shadow-sm">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
