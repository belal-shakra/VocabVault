@extends('base')

@section('tab-title' ,'Profile | '. Auth::user()->first_name .' '. Auth::user()->last_name)

@section('content')


    <main>

        <div class="container p-5 my-5">
            <div>
                <ul class="nav nav-tabs border-bottom border-2 border-dark" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold active" href="#"
                        data-bs-toggle="tab" data-bs-target="#profile">Profile</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="#"
                        data-bs-toggle="tab" data-bs-target="#save">Save</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="#"
                        data-bs-toggle="tab" data-bs-target="#delete">Delete Account</a>
                    </li>
                </ul>
            </div>



            <div class="p-4">
                <div class="tab-content container" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel">
                        <div class="my-3">

                            @session('profileUpdatedSuccessfully')
                                <div class="alert alert-success">
                                    {{ session('profileUpdatedSuccessfully') }}
                                </div>
                            @endsession


                            <h2>Edit</h2>
                            <form action="{{ route('profile.update', Auth::user()) }}" method="POST" class="py-2">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-12 col-lg-6 mb-3">
                                        <div class="input-group border border-1 border-dark rounded">
                                            <span class="input-group-text fw-bold bg-primary-subtle">First Name</span>
                                            <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}">
                                        </div>
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="col-sm-12 col-lg-6 mb-3">
                                        <div class="input-group border border-1 border-dark rounded">
                                            <span class="input-group-text fw-bold bg-primary-subtle">Last Name</span>
                                            <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}">
                                        </div>
                                    </div>
                                    @error('last_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <div class="input-group border border-1 border-dark rounded">
                                        <span class="input-group-text fw-bold bg-primary-subtle">Email</span>
                                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class=" py-5">
                                    <div class="row">
                                        <div class="col col-sm-12 col-lg-6 mb-3">
                                            <div class="input-group border border-1 border-dark rounded">
                                                <span class="input-group-text fw-bold bg-primary-subtle"
                                                style="min-width: 2rem">Password</span>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-sm-12 col-lg-6">
                                            <div class="input-group border border-1 border-dark rounded">
                                                <span class="input-group-text fw-bold bg-primary-subtle"
                                                style="min-width: 2rem">Confirmation</span>
                                                <input type="password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="save" role="tabpanel">
                        <div>
                            @include('word.table-of-words')
                        </div>
                    </div>


                    <div class="tab-pane fade" id="delete" role="tabpanel">
                        <div>
                            Delete Account
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


@endsection
