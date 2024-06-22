<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWordRequest;
use App\Models\Letter;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words = Word::paginate(perPage:10);
        return view('word.index', compact(['words']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('word.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWordRequest $request)
    {
        $word = $request->validated();
        $word['word'] = strtoupper($request->word);
        $word['letter_id'] = Letter::firstWhere('letter', strtoupper($request->word[0]))->id;


        Word::create($word);
        return back()->with('addWordSuccessfully', 'The word added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        //
    }
}
