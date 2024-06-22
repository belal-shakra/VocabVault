@extends('base')

@section('Vocabulary | Home')

@section('content')



    <main>
        <div class="m-5 d-flex justify-content-center">
            @include('parts.letters')
        </div>





        <div class="text-center pt-5 mt-5 pb-3 mb-3">
            <div class="fs-5">Search in</div>
            <h1 class="site-brand">
                <span>VocabVault</span>
            </h1>
        </div>


        <div class="d-flex justify-content-center mb-5">
            <form action="" method="post" id="search">
                <div class="input-group input-group-lg border border-1 border-dark rounded">
                    <span class="input-group-text bg-primary-subtle">
                        <a type="button"
                        onclick="document.getElementById('search').submit();"
                        class="nav-link text-white">
                            <i class="bi bi-search text-dark"></i>
                        </a>
                    </span>
                    <input type="text" class="form-control" name="search">
                </div>

                <div class="d-flex justify-content-center m-2">
                    <input type="submit" value="Search" class="btn btn-primary">
                </div>

            </form>
        </div>

    </main>


@endsection
