<nav class="navbar bg-primary navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold site-brand" href="{{ route('main.home') }}">
            VocabVault
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <div class="navbar-nav px-2">
                <li class="nav-item">
                    <a class="nav-link text-white px-2 active @yield('all')" href="{{ route('word.index') }}">All Words</a>
                </li>
                
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white px-2 @yield('add_new')"
                        href="{{ route('word.create') }}">Add New Word</a>
                    </li>
                @endauth
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            @auth
            <div class="dropdown mx-3">
                <a class="nav-link text-white" type="button" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle px-2"></i>
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                </a>
                <ul class="m-3 dropdown-menu">

                    <li><a class="dropdown-item" href="">Profile</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" id="logout">
                            @csrf
                            <a class="dropdown-item" onclick="document.getElementById('logout').submit();" href="">Logout</a>
                        </form>
                    </li>
                    </ul>
            </div>
            @endauth

            @guest
                <a class="nav-link text-white px-2 @yield('add_new')" href="{{ route('login') }}">
                    Login
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            @endguest
        </div>
    </div>
</nav>
