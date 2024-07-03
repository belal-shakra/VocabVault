@extends('base')

@section('tab-title', "Word | ". $word->word)
@section('', 'active')

@section('content')


    <main>
        @include('parts.letters')


        @if ($word != null)
            <div class="container">
                <div class="p-1">
                    <span class="btn btn-secondary dropdown-toggle"  data-bs-toggle="collapse"
                    data-bs-target="#pronunciation">Pronunciation</span>
                </div>

                <div id="pronunciation" class="collapse">
                    <img src="{{ asset('assets/img/word/pronun-1.png') }}"
                    alt="pronunciation-symbols" width="100%" class="mb-2 border-bottom border-1 border-dark shadow">
                    
                    <img src="{{ asset('assets/img/word/pronun-2.png') }}"
                    alt="pronunciation-symbols" width="100%" class="mb-2 border-bottom border-1 border-dark shadow">
                    
                    <img src="{{ asset('assets/img/word/pronun-3.png') }}"
                    alt="pronunciation-symbols" width="100%" class="mb-2 border-bottom border-1 border-dark shadow">
                    
                    <img src="{{ asset('assets/img/word/pronun-4.png') }}"
                    alt="pronunciation-symbols" width="100%" class="mb-2 border-bottom border-1 border-dark shadow">
                </div>
            </div>


            <div class="container">
                <div class="row mb-2 justify-content-center">
                    <h1 class="col-sm-12 col-md-12 col-lg-4 my-4">
                        {{ $word->word }}
                    </h1>

                    <div class="col-sm-12 col-md-12 col-lg-8 d-flex align-items-center flex-row-reverse">

                        <a href="https://translate.google.jo/details?hl=en&tab=rT&sl=en&tl=ar&text={{ $word->word }}&op=translate"
                        class="btn btn-primary" target="_blank">
                            <span class="d-none d-sm-inline-block">Google Translate</span>
                            <img width="28" height="28" src="https://img.icons8.com/color/48/google-translate.png" alt="google-translate"/>
                        </a>

                        <a href="{{ route('word.edit', $word->word) }}" class="btn btn-success mx-3 ms-0 px-5 py-2">Edit</a>

                        <form action="{{ route('word.save', $word) }}" method="post" id="save">
                            @csrf

                            @if ($word->save)
                                <a type="button" class="btn btn-warning mx-3 px-5 text-dark border border-3 border-warning"
                                onclick="document.getElementById('save').submit();">Saved</a>
                            @else
                                <a type="button" class="btn btn-outline-warning mx-3 px-5 text-dark border border-3 border-warning"
                                onclick="document.getElementById('save').submit();">Save</a>
                            @endif

                        </form>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Word</th>
                            <th>Meaning</th>
                            <th>Pronunciation</th>
                            <th>Like</th>
                        </tr>
                    </thead>
            
                    <tbody class="table-group-divider">
                        <tr>
                            <td>{{ $word->word }}</td>
                            <td>{{ $word->meaning }}</td>
                            <td><audio src="{{ $word->pronunciation }}"></audio></td>
                            <td>{{ $word->like }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            @if ($word->details)
                <div class="container my-5">
                    <div class="p-3 bg-light rounded shadow">
                        {!! nl2br($word->details) !!}
                    </div>
                </div>
            @endif


            <div class="container pt-5 mt-5">
                <a type="button" class="btn btn-danger"
                data-bs-toggle="modal" data-bs-target="#delete-word">Delete</a>
                @include('word.delete-modal')
            </div>
        @else
            <div class="d-flex justify-content-center fs-3 mt-5 pt-5">
                The word <b class="mx-2">( {{ request()->route('word') }} )</b> isn't registered,
                <a href="{{ route('word.create') }}" class="mx-2"> Try to register</a> it.
            </div>
        @endif

    </main>


@endsection
