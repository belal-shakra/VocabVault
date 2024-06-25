<?php

namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWordRequest;
use App\Models\Letter;
use App\Models\Word;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WordController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words = Word::where('user_id', Auth::user()->id)->orderBy('word')->paginate(perPage:10);
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
        $word['word'] = ucfirst(strtolower($request->word));
        $word['letter_id'] = Letter::firstWhere('letter', strtoupper($request->word[0]))->id;
        $word['user_id'] = Auth::user()->id;


        Word::create($word);
        return back()->with('addWordSuccessfully', 'The word added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $word)
    {
        $word = Word::where('user_id', Auth::user()->id)->firstWhere('word', $word);

        if(!$word)
            return to_route('word.index');

        return view('word.show', compact(['word']));
    }


    /**
     * Display the specified resource.
     */
    public function show_letter(string $letter)
    {

        if(!ctype_alpha($letter) || strlen($letter)>1)
            return to_route('word.index');


        $letter_id = Letter::firstWhere('letter', strtoupper($letter))->id;
        $words = Word::where('letter_id', $letter_id)->where('user_id', Auth::user()->id)->get();


        $letter = $letter;
        return view('word.show_letter', compact(['words', 'letter']));
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
