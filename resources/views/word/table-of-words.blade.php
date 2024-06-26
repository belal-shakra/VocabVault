@if (count($words))
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Word</th>
                    <th>Meaning</th>
                    <th>Pronunciation</th>
                    <th>Like</th>
                    <th colspan="3">Action</th>
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
                        <td style="width: 0%;">
                            <a href="{{ route('word.show', $word->word) }}" class="btn btn-primary" >Show</a>
                        </td>
                        <td style="width: 0%;">
                            <a href="{{ route('word.edit', $word->word) }}" class="btn btn-success" >Edit</a>
                        </td>
                        <td style="width: 0%;">
                            <a type="button" class="btn btn-danger"
                            data-bs-toggle="modal" data-bs-target="#delete-word">Delete</a>
                            @include('word.delete-modal')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="d-flex justify-content-center">
        <h5>There is no any words yet</h5>
    </div>
@endif