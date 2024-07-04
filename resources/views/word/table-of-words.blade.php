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
                    @if (Route::currentRouteName() != "word.show") <th colspan="3">Action</th> @endif
                </tr>
            </thead>
    
            <tbody class="table-group-divider">
                @foreach ($words as $word)
                    <tr>
                        <th>
                            @if (count($words) == 1)
                                {{ $loop->iteration }}
                            @else
                                {{ $words->firstItem() + $loop->index }}
                            @endif
                        </th>
                        <td>{{ $word->word }}</td>
                        <td>{{ $word->meaning }}</td>
                        <td>{{ $word->pronunciation }}</td>
                        <td>{{ $word->like }}</td>
                        @if (Route::currentRouteName() != "word.show")
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
                        @endif
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