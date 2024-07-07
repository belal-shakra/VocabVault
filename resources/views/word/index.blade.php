@extends('base')

@section('tab-title', 'All Words')
@section('all', 'active')

@section('content')


    <main>
        @include('parts.letters')




        <div class="container">
            <x-show-word-title :letter="null" :count="$words->total()">All Words</x-show-word-title>

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
