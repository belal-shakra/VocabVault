@extends('base')

@section('tab-title', 'Search | ' . $search)

@section('content')


    <main>
        @include('parts.letters')



        <div class="container py-3">
            <h1>Results :</h1>
            @if (count($words))
                @include('word.table-of-words')
            @else
                <div class="d-flex justify-content-center fs-3 mt-5 pt-5">
                    The word <b class="mx-2">( {{ $search }} )</b> isn't registered,
                    <a href="{{ route('word.create') }}" class="mx-2"> Try to register</a> it.
                </div>
            @endif
        </div>


    </main>


@endsection
