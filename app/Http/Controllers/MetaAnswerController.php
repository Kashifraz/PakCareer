<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\MetaAnswer;
use App\Models\User;
use Illuminate\Http\Request;

class MetaAnswerController extends Controller
{
   public function countUpVote(Answer $answer, User $user)
   {

      MetaAnswer::create([
         'user_id' => $user->id,
         'answer_id' => $answer->id,
         'is_upvoted' => true,
         'is_downvoted' => false,
      ]);

      return redirect()->back();
   }

   public function countDownVote(Answer $answer, User $user)
   {

      MetaAnswer::create([
         'user_id' => $user->id,
         'answer_id' => $answer->id,
         'is_upvoted' => false,
         'is_downvoted' => true,
      ]);

      return redirect()->back();
   }
}
