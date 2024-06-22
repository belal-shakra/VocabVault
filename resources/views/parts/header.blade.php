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
                <li class="nav-item">
                    <a class="nav-link text-white px-2 @yield('add_new')" href="{{ route('word.create') }}">Add New Word</a>
                </li>
            </div>
        </div>
    </div>
</nav>
