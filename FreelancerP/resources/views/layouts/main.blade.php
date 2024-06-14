<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <title>.: Freelancer App - @yield('title') :.</title>
</head>
<body>
    <div class="container-fluid">
        <!-- HEADER -->
        <div class="row header py-4 text-white" style="background-color: #005500;">
            <div class="col-md-12 d-flex justify-content-between">
                <h1 class="text-center">Find Your Perfect Freelancer</h1>
                @auth
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #005500">
                        <i class="bi bi-person-fill"></i> {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('user.edit') }}">Change Password</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>

    <div class="row no-gutters">
        <!-- MENU -->
        <div class="col-md-2 vh-100 sidebar border-right">
            <div class="nav flex-column nav-pills p-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                <a class="nav-link {{ ($key == 'home') ? 'active' : '' }} text-success" href="/">Home</a>
                <a class="nav-link {{ ($key == 'freelancer') ? 'active' : '' }} text-success" href="/freelancer">Freelancers</a>
                <a class="nav-link text-success" href="#">Messages</a>
                <a class="nav-link text-success" href="#">Settings</a>
            </div>
        </div>
        <!-- ARTICLE -->
        <div class="col-md-10 vh-100">
            <div class="card mt-4">
                <div class="card-header bg-light">
                    <h2 class="mb-0">@yield('title')</h2>
                </div>
                <div class="card-body">
                    @if (session('alert'))
                        <div class="alert alert-success">
                            {{ session('alert') }}
                        </div>
                    @endif
                    @yield('artikel')
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
