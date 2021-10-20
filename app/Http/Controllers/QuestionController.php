<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Evaluation;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function show(int $evaluationId, int $id)
    {
        $user = Auth::user()->getAuthIdentifier();
        $evaluation = Evaluation::find($evaluationId);
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

        return view('questions',
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

    public function saveAnswer(Request $request, int $evaluationId, int $id)
    {
        $user = Auth::user()->getAuthIdentifier();
        $questionId = $id;
        $nextQuestion = $questionId + 1;
        $answerId = $request->input('option');

        $answer = Answer::find($answerId);

        DB::table('questions_users')->updateOrInsert([
            'user_id' => $user,
            'question_id' => $id,
        ],[
            'answer_id' => $answerId,
            'is_correct' => $answer->is_correct ?? 0,
        ]);

        $corrects = DB::table('questions_users')
                      ->where('user_id', '=', $user)
                      ->where('is_correct', '=', 1)
                      ->count();

        $wrongs = DB::table('questions_users')
                    ->where('user_id', '=', $user)
                    ->where('is_correct', '=', 0)
                    ->count();

        return redirect()->route('questions', [
            'evaluationId' => $evaluationId,
            'id' => $nextQuestion,
            'corrects' => $corrects ?? 0,
            'wrongs' => $wrongs ?? 0,
        ]);

        return view('questions',
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
