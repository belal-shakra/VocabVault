@extends('base')

@section('tab-title', "$letter | Words")
@section('', 'active')

@section('content')


    <main>
        @include('parts.letters')



        <div class="container">
            <h1 class="my-2">Letter : {{ $letter }}</h1>

            @include('word.table-of-words')
        </div>

    </main>


@endsection
