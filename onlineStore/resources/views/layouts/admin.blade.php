<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <title>@yield('title', 'Admin - SoundWave')</title>
  </head>
  <body>
    <div class="row g-0">
    <!-- sidebar -->
    <div class="p-3 col fixed text-white bg-dark">
    <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
    <span class="fs-4">Admin Panel</span>
    </a>
    <hr />
    <ul class="nav flex-column">
    <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
    <li><a href="{{ route('admin.product.index')}}" class="nav-link text-white">- Admin - Products</a></li>
    <li>
    <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg> Go back home</a>
    </li>
    </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
    <nav class="p-3 shadow text-end">
    <span class="profile-font">Admin</span>
    <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
    </nav>
    <div class="g-0 m-5">
    @yield('content')
    </div>
    </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
    <div class="container">
    <small>
    Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
    href="#">
    Moe Creations
    </a>
    </small>
    </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>


  </body>
</html>
