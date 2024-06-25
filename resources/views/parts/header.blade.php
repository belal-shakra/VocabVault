<nav class="navbar bg-primary navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold site-brand" href="{{ route('main.home') }}">
            VocabVault
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="container-fluid collapse navbar-collapse" id="nav">
            <div class="container-fluid navbar-nav px-2">
                <li class="nav-item">
                    <a class="nav-link text-white px-2 active @yield('all')" href="{{ route('word.index') }}">All Words</a>
                </li>



                <li class="nav-item">
                    @auth
                        <a class="nav-link text-white px-2 @yield('add_new')"
                        href="{{ route('word.create') }}">Add New Word</a>
                    @endauth
                </li>



                <li class="nav-item dropdown">
                    @auth
                        <a class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle px-2"></i>
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.profile') }}">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="post" id="logout">
                                    @csrf
                                    <a class="dropdown-item" onclick="document.getElementById('logout').submit();" type="button">Logout</a>
                                </form>
                            </li>
                        </ul>
                    @endauth



                    @guest
                        <a class="nav-link text-white px-2 @yield('add_new')" href="{{ route('login') }}">
                            Login
                            <i class="bi bi-box-arrow-in-right"></i>
                        </a>
                    @endguest
                </li>
            </div>


            <form class="d-flex " action="{{ route('search.search') }}" method="post" id="search">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" name="search">
                <a type="button" class="btn btn-outline-light"
                onclick="document.getElementById('search').submit();">
                    Search
                </a>
            </form>


        </div>
    </div>
</nav>
