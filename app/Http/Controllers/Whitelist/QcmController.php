<?php

namespace App\Http\Controllers\Whitelist;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class QcmController extends Controller
{
    public function index()
    {
        if(Auth::user()->qcm >= 8){
            return view('panel.home');
        }

        $questions = Question::all();
        //dd($questions->count());
        if($questions->count() < 10){
            return view('panel.whitelist.index', [
                'error' => "Il n'y a pas assez de questions pour participer au QCM (Min: 10)"
            ]);
        }
        $answers = Answer::all();
        if($answers->count() < 10){
            return view('panel.whitelist.index', [
                'error' => "Il n'y a pas assez de réponses pour participer au QCM (Min: 10)"
            ]);
        }
        return view('panel.whitelist.qcm', [
            'questions' => $questions,
            'answers' => $answers
        ]);

    }

    public function validator(Request $request)
    {

        $inputs = $request->All();

        $scores = -1;

        foreach ($inputs as $key => $input) {

            if(Answer::query()->where('id', $key)->where('isCorrect', $input)->exists()){
                $scores++;
            }
        }
        
        $account = Auth::user();
        $account->qcm = $scores;
        $account->try = $account->try+1;

        $account->save();

        return view('panel.whitelist.result', [
            'scores' => $scores,
            'try' => $account->try
        ]);
    }

    public function create()
    {
        return view('panel.whitelist.qcm');
    }
}
