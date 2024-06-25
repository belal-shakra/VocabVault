<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\Word;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(SearchRequest $request){
        $search = $request->validated()['search'];

        return redirect('/result?search='. $search);
    }


    public function result(Request $request){
        $search = $request->get('search');
        $words = Word::where('word', $search)->get();

        return view('search.result', compact(['search', 'words']));
    }
}
