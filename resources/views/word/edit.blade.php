@extends('base')

@section('tab-title', 'Update | '. $word->word)
@section('add_new', 'active')

@section('content')


    <main>
        @include('parts.letters')



        <div class="container">



            <h1 class="text-center my-5">Update</h1>
            <form action="{{ route('word.update', $word) }}" method="post" class="">
                @csrf
                @method('patch')

                <div class="row justify-content-center">
                    <div class="col col-md-12 col-lg-4 mx-1 mb-3">
                        <div class="input-group border border-1 border-dark rounded">
                            <span class="input-group-text fw-bold">Word</span>
                            <input type="text" class="form-control" name="word" value="{{ $word->word }}">
                        </div>
                        @error('word')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
    
                    <div class="col col-md-12 col-lg-4 mx-1 mb-3">
                        <div class="input-group border border-1 border-dark rounded">
                            <span class="input-group-text fw-bold">Meaning</span>
                            <input type="text" class="form-control" name="meaning" value="{{ $word->meaning }}">
                        </div>
                        @error('meaning')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col col-md-12 col-lg-4 mx-1 mb-3">
                        <div class="input-group border border-1 border-dark rounded">
                            <span class="input-group-text fw-bold">Pronunciation</span>
                            <input type="text" class="form-control" name="pronunciation" value="{{ $word->pronunciation }}">
                        </div>
                        @error('pronunciation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col col-md-12 col-lg-4 mx-1 mb-3">
                        <div class="input-group border border-1 border-dark rounded">
                            <span class="input-group-text fw-bold">Like</span>
                            <input type="text" class="form-control" name="like" value="{{ $word->like }}">
                        </div>
                        @error('like')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col col-md-12 col-lg-8 mx-1 mb-3">

                        <div class="form-floating border border-1 border-dark rounded">
                            <textarea class="form-control" placeholder="" id="details" 
                            style="height:7rem;" name="details"
                            >{{ $word->details }}</textarea>
                            <label for="details" class="fw-bold">Details</label>
                        </div>
                        @error('details')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class=" my-4">
                    <div class="row justify-content-center">
                        <input type="submit" value="Update" class="btn btn-primary p-2 m-2 col-sm-12 col-lg-5">
                    </div>
                </div>
            </form>
        </div>
    </main>


@endsection
