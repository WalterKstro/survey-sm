<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Survey;
use App\Models\TypeAnswer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.questions.index',[
            'questions' => Question::with('survey')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.questions.create',[
            'surveys' => Survey::all('id','name','active'),
            'type_answers' => TypeAnswer::all('id','name')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'question' => 'required',
            'survey_id' => 'required',
            'type_answer_id' => 'required',
            'optional' => 'required'
        ]);

        $question  = new Question($validated);
        $question->save();
        return to_route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
