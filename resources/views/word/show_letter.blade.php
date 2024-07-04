@extends('base')

@section('tab-title', "$letter | Words")
@section('', 'active')

@section('content')


    <main>
        @include('parts.letters')



        <div class="container">
            <h1 class="my-2">Letter : {{ $letter }}</h1>

            @include('word.table-of-words')

            <div class="row">
                <div class="col-lg-12">
                    <nav class="blog-pagination justify-content-center d-flex">
                        {{ $words->render('pagination::bootstrap-4') }}
                    </nav>
                </div>
            </div>
        </div>

    </main>


@endsection
