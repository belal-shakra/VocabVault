@extends('base')

@section('tab-title', 'All Words')
@section('all', 'active')

@section('content')


    <main>
        @include('parts.letters')




        <div class="container">
            <h1 class="my-2">All Words</h1>

            @include('word.table-of-words')
        </div>
    </main>


@endsection
