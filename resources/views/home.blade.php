<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>Welcome, {{ Auth::user()->nama_lengkap }}</h1>
                <a href="{{ route('logout') }}" class="btn btn-danger mt-4">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
