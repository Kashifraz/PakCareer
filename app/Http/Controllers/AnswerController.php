<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'answer' => 'required|min:30'
        ]);

        Answer::create([
            'user_id' => auth()->user()->id,
            'question_id' => $request->question_id,
            'answer_text' => $request->answer,
        ]);

        return redirect()->back()->with('success', 'answer posted successfully');
    }
  
}
