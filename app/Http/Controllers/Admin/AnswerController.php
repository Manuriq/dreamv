<?php

namespace App\Http\Controllers\Admin;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::all();

        return view('panel.admin.answer.index', [
            'answers' => $answers
        ]);
    }

    public function search(Request $request)
    {
        $answers = Answer::query()->where('content', 'LIKE','%'.$request->content.'%')->get();

        return view('panel.admin.answer.index', [
            'answers' => $answers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();

        return view('panel.admin.answer.create', [
            'questions' => $questions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required'],
            'question' => ['required']
        ]);

        $question = Question::find($request->input('question'));

        $question->answers()->create([
            'content' => $request->input('content'),
            'isCorrect' => $request->boolean('isCorrect')
        ]);

        return $this->search($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        $questions = Question::all();

        return view('panel.admin.answer.edit', [
            'answer' => $answer,
            'questions' => $questions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        $request->validate([
            'content' => ['required'],
            'question' => ['required']
        ]);

        $answer->update([
            'content' => $request->input('content'),
            'question_id' => $request->input('question'),
            'isCorrect' => $request->boolean('isCorrect')
        ]);

        $questions = Question::all();

        return view('panel.admin.answer.edit', [
            'answer' => $answer,
            'questions' => $questions
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {;
        $answer->delete();

        return view('panel.admin.answer.index');
    }
}
