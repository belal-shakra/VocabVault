@extends('base')

@section('tab-title', "")
@section('', 'active')

@section('content')


    <main>
        <div class="m-5 d-flex justify-content-center">
            @include('parts.letters')
        </div>


        @if ($find)
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
                <div class="row">
                    <h1 class="col-6 my-4">{{ $word->word }}</h1>

                    <div class="col-6 d-flex align-items-center flex-row-reverse">
                        <a href="https://translate.google.jo/?hl=en&tab=rT&sl=en&tl=ar&text={{ $word->word }}&op=translate"
                        class="btn btn-primary" target="_blank">
                            Google Translate
                            <img width="28" height="28" src="https://img.icons8.com/color/48/google-translate.png" alt="google-translate"/>
                        </a>
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


            <div class="container my-5">
                <div class="p-3 bg-light rounded shadow">
                    <h4>English Meaning</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Nulla fugiat perspiciatis enim placeat officiis maiores, atque fuga dolores vitae nihil, iste,
                        sequi eligendi neque exercitationem blanditiis earum sed accusamus error ipsam quasi pariatur?
                        Accusantium a velit tenetur. Maiores, minima ad!
                    </p>


                    <h4>Examples</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    </p>



                </div>
            </div>
        @else
            <div class="d-flex justify-content-center fs-3 mt-5 pt-5">
                The word <b class="mx-2">( {{ request()->route('word') }} )</b> isn't registered,
                <a href="{{ route('word.create') }}" class="mx-2"> Try to register</a> it.
            </div>
        @endif


    </main>


@endsection
