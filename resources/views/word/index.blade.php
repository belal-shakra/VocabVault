@extends('base')

@section('tab-title', 'All Words')
@section('all', 'active')

@section('content')


    <main>
        <div class="m-5 d-flex justify-content-center">
            @include('parts.letters')
        </div>



        <div class="container">
            <h1 class="my-2">All Words</h1>

            @include('word.table-of-words')
        </div>


        {{-- <div class="container">
            @if (count($words))
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Word</th>
                            <th>Arabic Meaning</th>
                            <th>Pronunciation</th>
                            <th>Like</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        @foreach ($words as $word)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $word->word }}</td>
                                <td>{{ $word->meaning }}</td>
                                <td>{{ $word->pronunciation }}</td>
                                <td>{{ $word->like }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @else
                <div class="d-flex justify-content-center">
                    <h5>There is no any words yet</h5>
                </div>
            @endif
        </div> --}}
    </main>


@endsection
