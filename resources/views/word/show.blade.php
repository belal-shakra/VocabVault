@extends('base')

@section('tab-title', "Word | ". $word->word)
@section('', 'active')

@section('content')


    <main>
        <div class="m-5 d-flex justify-content-center">
            @include('parts.letters')
        </div>


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
                <div class="row mb-2">
                    <h1 class="col-6 my-4">
                        {{ $word->word }}
                    </h1>

                    <div class="col col-sm-12 col-lg-6 d-flex align-items-center flex-row-reverse">
                        <a href="https://translate.google.jo/details?hl=en&tab=rT&sl=en&tl=ar&text={{ $word->word }}&op=translate"
                        class="btn btn-primary" target="_blank">
                            Google Translate
                            <img width="28" height="28" src="https://img.icons8.com/color/48/google-translate.png" alt="google-translate"/>
                        </a>


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
        @else
            <div class="d-flex justify-content-center fs-3 mt-5 pt-5">
                The word <b class="mx-2">( {{ request()->route('word') }} )</b> isn't registered,
                <a href="{{ route('word.create') }}" class="mx-2"> Try to register</a> it.
            </div>
        @endif

    </main>


@endsection
