<div class="modal fade" id="delete-word">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Word Deletion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Are You Sure to delete this Word <b>({{ $words->first()->word }})</b> ?
            </div>
            <div class="modal-footer">
                <form action="{{ route('word.destroy', $words->first()) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>