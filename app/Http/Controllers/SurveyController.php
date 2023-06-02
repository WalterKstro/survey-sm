<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Origin;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function showOrigin(Request $request) {
        $origins = Origin::all();
        $params = $request->all();
        if( !$origins || !$params ){
            return view('public.404');
        }
        return view('public.home',compact('params','origins'));
    }

    public function showQuestions(Request $request) {

        $idOrigin = intval($request->input('origin'));
        $idContry = Country::where('int','=',$request->input('country'))
                    ->select('countries.id')
                    ->first();

        $questions = Survey::with(['questions','answers'])
            ->where('surveys.country_id','=',intval($idContry->id))
            ->where('surveys.origin_id','=',$idOrigin)
            ->select(
                'surveys.id','surveys.name','surveys.event_id','surveys.origin_id'
            )
            ->get();

        if( count($questions) == 0 ){
            return to_route('not-found');
        }
        return view('public.survey',[
            'questions' => $questions
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
