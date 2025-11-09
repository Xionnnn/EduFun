<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid d-flex justify-content-between">
        <div class="navbar-brand">
            <img height="50px" src="{{asset('img/logo.jpg')}}" alt="">
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-5">
                    <a class="nav-link text-dark" href="{{route('home.index')}}">Home</a>
                </li>
                <li class="nav-item me-5 dropdown">
                    <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Interactive Multimedia</a></li>
                        <li><a class="dropdown-item" href="#">Software Engineering</a></li>
                    </ul>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link text-dark" href="#">Writers</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link text-dark" href="#">About us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
