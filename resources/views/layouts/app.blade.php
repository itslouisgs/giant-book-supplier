<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant Book Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 shadow-sm">
      <div class="container">
        <div>
          <a class="navbar-brand fw-bold" href="{{ url('/') }}">GIANT BOOK SUPPLIER</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mt-3 mt-lg-0" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item me-4">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ url('/categories/1') }}">Comedy</a></li>
                <li><a class="dropdown-item" href="{{ url('/categories/2') }}">Romance</a></li>
                <li><a class="dropdown-item" href="{{ url('/categories/3') }}">Sci-fi</a></li>
                <li><a class="dropdown-item" href="{{ url('/categories/4') }}">Nonfiction</a></li>
                <li><a class="dropdown-item" href="{{ url('/categories/5') }}">Self-development</a></li>
              </ul>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="{{ url('/publisher') }}">Publisher</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
        @yield('body')
    </main>

    <footer class="border-top bg-white py-4 mt-5">
        <div class="container d-md-flex justify-content-between">
          <p class="text-center mb-0">© 2022 Giant Book Supplier. All rights reserved.</p>
          <ul class="list-none m-0 ps-0 d-flex justify-content-center d-md-block pt-2 pt-md-0">
            <li class="d-inline me-4"><a class="footer-link" href="{{ url('/') }}">Home</a></li>
            <li class="d-inline me-4"><a class="footer-link" href="{{ url('/publisher') }}">Publisher</a></li>
            <li class="d-inline"><a class="footer-link" href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>