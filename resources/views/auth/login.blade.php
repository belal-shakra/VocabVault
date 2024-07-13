@extends('base')

@section('tab-title', 'VocabVault | Login')

@section('content')


  <section class="h-100 gradient-form my-5">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black shadow-lg">
            <div class="row g-0">

              <div class="col-lg-6 p-3">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center my-5 h1">
                    Login
                  </div>

                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <x-input type=email name=email label=Email/>

                    <x-input type=password name=password label=Password/>

                    <div class="text-center pt-1 mt-3 mb-5 pb-1">
                      <input type="submit" value="Login" class="btn btn-primary">
                    </div>

                    <div class="row align-items-center justify-content-center mt-2 mb-4">
                      <p class="mb-0 me-2 col-xs-12 text-center">Don't have an account?</p>
                      <a href="{{ route('register') }}" class="btn btn-outline-primary">Create New</a>
                    </div>

                  </form>

                </div>
              </div>


              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <div class="mb-4"><img src="{{ asset('assets/img/VocabVault.png') }}" alt="logo" class="img-fluid"></div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection