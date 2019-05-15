<?php

namespace App\Http\Controllers;

use App\Question;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($question)
    {
        $tag = new Tag;
        $edit = FALSE;
        return view('tagForm', ['tag' => $tag,'edit' => $edit, 'question' =>$question  ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $question)
    {
        $input = $request->validate([
            'tag' => 'required|min:2',
        ], [

            'tag.required' => 'Tag is required',
            'tag.min' => 'Tag must be at least 2 characters',

        ]);

        $input = request()->all();
        $question = Question::find($question);
        $tag = new Tag($input);
        $tag->user()->associate(Auth::user());
        $tag->question()->associate($question);
        $tag->save();

        return redirect()->route('question.show',['question_id' => $question->id])->with('message', 'Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param Question $question
     * @param \App\Tag $tag
     * @return void
     */
    public function show($question, $tag)
    {
        $tag = Tag::find($tag);

        return view('tag')->with(['tag' => $tag, 'question' => $question]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $question
     * @param \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($question, $tag)
    {
        $tag = Tag::find($tag);
        $edit = TRUE;
        return view('tagForm', ['tag' => $tag, 'edit' => $edit, 'question'=>$question ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $question
     * @param \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $question, $tag)
    {
        $input = $request->validate([
            'tag' => 'required|min:2',
        ], [

            'tag.required' => 'Tag is required',
            'tag.min' => 'Tag must be at least 2 characters',

        ]);

        $tag = Tag::find($tag);
        $tag->tag = $request->tag;
        $tag->save();

        return redirect()->route('tag.show',['question_id' => $question, 'tag_id' => $tag])->with('message', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $question
     * @param \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($question, $tag)
    {
        $tag = Tag::find($tag);

        $tag->delete();
        return redirect()->route('question.show',['question_id' => $question])->with('message', 'Delete');
    }

}
