<div class="btn-group-lg">
    @foreach ($letters as $letter)
        <a href="" class="btn bg-primary-subtle border border-1 border-primary my-1">
            {{ $letter->letter }}
        </a>
    @endforeach
</div>
