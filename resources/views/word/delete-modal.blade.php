<div class="modal fade" id="delete-word{{ $loop }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">{{ $word->word }} -- {{ $word->meaning }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Are You Sure to delete this Word ?
            </div>
            <div class="modal-footer">
                <form action="{{ route('word.destroy', $word) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>