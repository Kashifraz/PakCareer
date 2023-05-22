<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::latest()->paginate(5);
        return view('discussion',[
            'questions' => $questions,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|min:30'
        ]);

        Question::create([
            'user_id' => auth()->user()->id,
            'question_text' => $request->question,
        ]);

        return redirect()->back()->with('success', 'Question posted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        $answers = Answer::where('question_id',$question->id)->latest()->get();
       
        return view('showquestion',[
            'question' => $question,
            'answers'  => $answers,
        ]);
    }

    public function destroy(Question $question)
    {
        $answers = Answer::where('question_id',$question->id)->with(["replies","likes"])->latest()->get();
        foreach ($answers as $answer) {
            $answer->delete();
        }
        $question->delete();
        return redirect()->back()->with('success', 'Question deleted successfully');
    }

}
