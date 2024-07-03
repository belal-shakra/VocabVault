<div class="m-5 d-flex-justify-content-center">
    <div class="btn-group-lg text-center">
        @foreach ($letters as $letter)
            <a href="{{ route('word.letter', $letter->letter) }}"
                class="btn bg-primary-subtle border border-1 border-primary my-1">
                {{ $letter->letter }}
            </a>
        @endforeach
    </div>
</div>
