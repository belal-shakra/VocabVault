@extends('base')

@section('tab-title', 'VocabVault | Login')

@section('content')


  {{-- <header class="p-2 m-1 mb-5 bg-primary">
    <div class="d-flex justify-content-center">
      <img src="{{ asset('assets/img/VocabVault-lg.png') }}" alt="VocabVault" class="img-flui"
      style="height: 12rem; width: 35rem;" >
    </div>
  </header>

  <main>
    <div class="container py-5">

      <div class="d-flex justify-content-center">
        
        <form action="{{ route('login') }}" method="post"
        class="guest-bg-color border border-1 border-dark rounded p-5 pt-3 mt-5 shadow-lg">
        @csrf
          <h1 class="text-center py-4">Login</h1>
        
          <div class="form-floating mb-3">
            <input type="email" class="form-control border border-1 border-dark rounded" id="email" placeholder="">
            <label for="email">Email address</label>
          </div>


          <div class="form-floating mb-3">
            <input type="password" class="form-control border border-1 border-dark rounded" id="password" placeholder="">
            <label for="password">Password</label>
          </div>



          <div class="d-flex justify-content-center py-2">
            <input type="submit" value="Login" class="btn btn-primary px-3 py-2">
          </div>
        </form>
      </div>

    </div>
  </main>
--}}




  <section class="h-100 gradient-form my-5">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black shadow-lg">
            <div class="row g-0">

              <div class="col-lg-6 p-3">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center my-5 site-brand">
                      <h1>Login</h1>
                  </div>

                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-floating mb-3">
                      <input type="email" class="form-control border border-1 border-dark rounded"
                      id="email" placeholder="" name="email" value="{{ old('email') }}">

                      <label for="email">Email address</label>
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
          
          
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control border border-1 border-dark rounded"
                      id="password" placeholder="" name="password" value="{{ old('password') }}">

                      <label for="password">Password</label>
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
          

                    <div class="text-center pt-1 mt-3 mb-5 pb-1">
                      <input type="submit" value="Login" class="btn btn-primary">
                    </div>

                    <div class="row align-items-center justify-content-center pb-4">
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