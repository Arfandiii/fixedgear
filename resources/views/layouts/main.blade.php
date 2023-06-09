<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fixedgear | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand px-5 fs-3 fw-bolder" href="/"><span class="text-warning">FIXED</span>GEAR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fs-5">
                    <li class="nav-item px-3">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/service">Service</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('container')
    </div>
    <footer class="py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 Fixedgear</p>
                </div>
                <div class="col-md-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="list-inline-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="list-inline-item"><a class="nav-link" href="/service">Service</a></li>
                        <li class="list-inline-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
