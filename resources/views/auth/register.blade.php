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

                    <x-input type=text name=first_name label=first_name/>

                    <x-input type=text name=last_name label=last_name/>

                    <x-input type=email name=email label=Email/>

                    <x-input type=password name=password label=Password/>

                    <x-input type=password name=password_confirmation label="Password Confirmation"/>

                    <div class="d-flex flex-row-reverse">
                      <div class="justify-content-start mx-4 mt-3">
                        <span>
                          Already registered?
                          <a href="{{ route('login') }}">Login</a>
                        </span>
                      </div>
  
                      <div class="justify-content-end mx-4 mb-lg-4">
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