<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Evaluation;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{
    public function finish(int $id)
    {
        $user = Auth::user()->getAuthIdentifier();
        $evaluation = Evaluation::find($id);
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)->get();

        $corrects = DB::table('questions_users')
                      ->where('user_id', '=', $user)
                      ->where('is_correct', '=', 1)
                      ->count();

        $wrongs = DB::table('questions_users')
                    ->where('user_id', '=', $user)
                    ->where('is_correct', '=', 0)
                    ->count();

        return view('finish',
            [
                'evaluation' => $evaluation,
                'question' => $question,
                'questionNumber' => $question->id,
                'answers' => $answers,
                'corrects' => $corrects ?? 0,
                'wrongs' => $wrongs ?? 0,
            ]
        );
    }
}
