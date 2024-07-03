<div class="modal fade" id="delete-account">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delete Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('profile.destroy', Auth::user()) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-body">

                    <p class="fw-bold">
                        Are You Sure to delete your account ?
                    </p>

                    <div>
                        <div class="input-group mb-3 border border-1 border-dark rounded">
                            <span class="input-group-text bg-primary-subtle fw-bold">Email</span>
                            <input type="email" class="form-control" name="email">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror


                        <div class="input-group mb-3 border border-1 border-dark rounded">
                            <span class="input-group-text bg-primary-subtle fw-bold">Password</span>
                            <input type="password" class="form-control" name="password">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                
                <div class="modal-footer">
                    <input type="submit" value="Delete" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</div>