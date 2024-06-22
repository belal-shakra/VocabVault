@if (count($words))
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Word</th>
                <th>Arabic Meaning</th>
                <th>Pronunciation</th>
                <th>Like</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
            @foreach ($words as $word)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $word->word }}</td>
                    <td>{{ $word->meaning }}</td>
                    <td><audio src="{{ $word->pronunciation }}"></audio></td>
                    <td>{{ $word->like }}</td>
                    <td><a href="{{ route('word.show', $word) }}" class="btn btn-primary" >Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="d-flex justify-content-center">
        <h5>There is no any words yet</h5>
    </div>
@endif