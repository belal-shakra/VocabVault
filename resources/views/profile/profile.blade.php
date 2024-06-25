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
                        data-bs-toggle="tab" data-bs-target="#favorite">Favorites</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="#"
                        data-bs-toggle="tab" data-bs-target="#words">Added Words</a>
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
                            <h2>Edit</h2>

                            <form action="{{ route('profile.update', Auth::user()) }}" method="POST" class="py-2">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="input-group mb-3 border border-1 border-dark rounded">
                                            <span class="input-group-text fw-bold bg-primary-subtle">First Name</span>
                                            <input type="text" class="form-control" name="first_name">
                                        </div>
                                    </div>
        
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="input-group mb-3 border border-1 border-dark rounded">
                                            <span class="input-group-text fw-bold bg-primary-subtle">Last Name</span>
                                            <input type="text" class="form-control" name="last_name">
                                        </div>
                                    </div>
                                </div>


                                <div class="input-group mb-3 border border-1 border-dark rounded">
                                    <span class="input-group-text fw-bold bg-primary-subtle">Email</span>
                                    <input type="email" class="form-control" name="email">
                                </div>


                                <div class=" py-5">
                                    <div class="row">
                                        <div class="col col-sm-12 col-lg-6">
                                            <div class="input-group mb-3 border border-1 border-dark rounded">
                                                <span class="input-group-text fw-bold bg-primary-subtle"
                                                style="min-width: 2rem">Password</span>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-sm-12 col-lg-6">
                                            <div class="input-group mb-3 border border-1 border-dark rounded">
                                                <span class="input-group-text fw-bold bg-primary-subtle"
                                                style="min-width: 2rem">Confirmation</span>
                                                <input type="password" class="form-control" name="password-confirmation">
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


                    <div class="tab-pane fade" id="favorite" role="tabpanel">
                        <div>
                            favorite
                        </div>
                    </div>


                    <div class="tab-pane fade" id="words" role="tabpanel">
                        <div>
                            Added Words
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
