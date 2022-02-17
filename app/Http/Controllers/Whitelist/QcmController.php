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

        if(Auth::user()->try >= 3){
            return view('panel.home');
        }

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
        
        // On ajoute une tentative à l'utilisateur
        Auth::user()->try++;
        Auth::user()->save();
        $questions = Question::all();

        return view('panel.whitelist.qcm', [
            'questions' => $questions,
            'answers' => $answers
        ]);

    }

    public function validator(Request $request)
    {

        $inputs = $request->all();

        $questions = Question::all();

        $retourFormulaire = $inputs['reponse'];        
        

       $nbError = 0;
        foreach ($questions as $key => $question) {
            $error = false;
            $reponsesDb = $question->answers->keyBy('id')->toArray();            

            if(!array_key_exists($question->id, $retourFormulaire)){
                //on as pas de reponse pour cette question dans le formulaire !
                $error = true; 
            }else{   
                //l'utilisateur a repondu a la question             
                foreach ($reponsesDb as $repId => $repInfos) {
                    if( $repInfos['isCorrect'] && !array_key_exists($repId, $retourFormulaire[$question->id]) ){
                        //t'as fait une erreur, tu as pas coche la bonne reponse
                        $error = true; 
                    }

                    if( !$repInfos['isCorrect'] && array_key_exists($repId, $retourFormulaire[$question->id]) && !$error){
                        //t'as fait une erreur, tu as pas coche une mauvaise reponse
                        $error = true; 
                    }

                    if($error) break;
                }   
            }
            
            if($error){  $nbError++; }
        } // fin boucle questions

       
        $account = Auth::user();
        $account->qcm = count($questions)-$nbError;

        $account->save();

        return view('panel.whitelist.result', [
            'scores' => $account->qcm,
            'try' => $account->try
        ]);
    }

    public function create()
    {
        return view('panel.whitelist.qcm');
    }
}
