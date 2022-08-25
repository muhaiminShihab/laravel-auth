<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container">
            <div class="row vh-100 d-flex align-items-center justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h5 class="mb-0">Welcome Back, {{ auth()->user()->name }}!</h5>
                                </div>
                                <div class="col-3 text-end">
                                    <a href="{{ route('logout') }}" class="btn btn-warning">Logout</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            This is a laravel auth project where from we can register, login, & logout.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>