@extends('base')

@section('tab-title', "$letter | Words")
@section('', 'active')

@section('content')


    <main>
        <div class="m-5 d-flex justify-content-center">
            @include('parts.letters')
        </div>



        <div class="container">
            <h1 class="my-2">Letter : {{ $letter }}</h1>

            @include('word.table-of-words')
        </div>

    </main>


@endsection
