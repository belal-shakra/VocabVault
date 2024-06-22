@extends('base')

@section('tab-title', 'Add New Word')
@section('add_new', 'active')

@section('content')


    <main>
        <div class="m-5 d-flex justify-content-center">
            @include('parts.letters')
        </div>




        <div class="container">

            <h1 class="text-center my-5">Add New Word</h1>
            <form action="{{ route('word.store') }}" method="post" class="">
                @csrf

                <div class="row justify-content-center">
                    <div class="col col-lg-4 mx-1">
                        <div class="input-group mb-3 border border-1 border-dark rounded">
                            <span class="input-group-text fw-bold">Word</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
    
                    <div class="col col-lg-4 mx-1">
                        <div class="input-group mb-3 border border-1 border-dark rounded">
                            <span class="input-group-text fw-bold">Meaning</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="col col-lg-4 mx-1">
                        <div class="input-group mb-3 border border-1 border-dark rounded">
                            <span class="input-group-text fw-bold">Pronunciation</span>
                            <input type="file" class="form-control">
                        </div>
                    </div>
    
                    <div class="col col-lg-4 mx-1">
                        <div class="input-group mb-3 border border-1 border-dark rounded">
                            <span class="input-group-text fw-bold">Like</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>


                <div class=" my-4">
                    <div class="row justify-content-center">
                        <input type="submit" value="Add" class="btn btn-primary p-2 m-2 col-sm-12 col-lg-5">
                    </div>
                </div>
            </form>
        </div>





    </main>


@endsection
