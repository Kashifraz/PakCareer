<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
   
    public function index($student_id, $counselor_id)
    {
        $messages = Message::where('student_id', $student_id)
            ->where('counselor_id', $counselor_id)->get();
        return view('message.message', [
            'messages' => $messages,
            'student_id' => $student_id,
            'counselor_id' => $counselor_id,
        ]);
    }

    
    public function showalerts()
    {
        $messages = Message::where('is_student', true)->get();
        return view('message.messagealert', [
            'messages' => $messages,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'message_text' => 'required|min:10'
        ]);

        if(Auth::user()->role == 's'){
            Message::create([
                'user_id' => auth()->user()->id,
                'student_id' => $request->student_id,
                'counselor_id' => $request->counselor_id,
                'message_text' => $request->message_text,
                'is_student' => true,
            ]);
        }else{
            Message::create([
                'user_id' => auth()->user()->id,
                'student_id' => $request->student_id,
                'counselor_id' => $request->counselor_id,
                'message_text' => $request->message_text,
            ]);
        }

        return redirect()->back()->with('success', 'Message sent');
    }
    

    public function destroy(Message $message)
    {
        //
    }
}
