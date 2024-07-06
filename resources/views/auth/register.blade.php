@extends('base')

@section('tab-title', 'VocabVault | Register')

@section('content')



  <section class="pt-5 mt-5">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">




                <div class="col-md-10 col-lg-6 col-xl-5">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form action="{{ route('register') }}" method="POST" class="mx-1 mx-md-4">
                    @csrf


                    <div class="mb-4">
                      <div class="form-floating flex-fill mb-0">
                        <input type="text" id="fname" class="form-control" name="first_name" placeholder="" value="{{ old('first_name') }}">
                        <label class="form-label" for="fname">First Name</label>
                      </div>
                      @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="mb-4">
                      <div class="form-floating flex-fill mb-0">
                        <input type="text" id="lname" class="form-control" name="last_name" placeholder="" value="{{ old('last_name') }}">
                        <label class="form-label" for="lname">Last Name</label>
                      </div>
                      @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="mb-4">
                      <div class="form-floating flex-fill mb-0">
                        <input type="email" id="email" class="form-control" name="email" placeholder="" value="{{ old('email') }}">
                        <label class="form-label" for="email">Email</label>
                      </div>
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="mb-4">
                      <div class="form-floating flex-fill mb-0">
                        <input type="password" id="password" class="form-control" name="password" placeholder="" value="{{ old('password') }}">
                        <label class="form-label" for="password">Password</label>
                      </div>
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="mb-4">
                      <div class="form-floating flex-fill mb-0">
                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="">
                        <label class="form-label" for="password_confirmation">Password Confirmation</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row-reverse">
                      <div class="justify-content-start mx-4 mt-3">
                        <span>
                          Already registered?
                          <a href="{{ route('login') }}">Login</a>
                        </span>
                      </div>
  
                      <div class="justify-content-end mx-4 mb-3 mb-lg-4">
                        <input type="submit" value="Register"  class="btn btn-primary btn-lg">
                      </div>
                    </div>

                  </form>

                </div>




                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="{{ asset('assets/img/VocabVault-lg.png') }}"
                    class="img-fluid rounded" alt="VocabVault-logo">
                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection