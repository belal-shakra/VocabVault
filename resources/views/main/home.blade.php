@extends('base')

@section('tab-title' ,'VocabVault | Home')

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
            <form action="{{ route('search.search') }}" method="post" id="search">
                @csrf

                <div class="input-group input-group-lg border border-1 border-dark rounded">
                    <span class="input-group-text bg-primary-subtle">
                        <i class="bi bi-search text-dark pb-4"></i>
                    </span>
                    <input type="search" class="form-control" name="search">
                </div>

                <div class="d-flex justify-content-center m-2">
                    <input type="submit" value="Search" class="btn btn-primary">
                </div>

            </form>
        </div>

    </main>


@endsection
