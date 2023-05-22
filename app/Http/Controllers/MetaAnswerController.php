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
      $recordExist = MetaAnswer::where(['user_id' => $user->id,'answer_id' => $answer->id,])->get();
      if(count($recordExist) == 0 ){
         MetaAnswer::create([
            'user_id' => $user->id, 
            'answer_id' => $answer->id,
            'is_upvoted' => true,
            'is_downvoted' => false,
         ]);
      }else{
         MetaAnswer::where(['user_id' => $user->id,'answer_id' => $answer->id])
         ->update([
            'is_upvoted' => true,
            'is_downvoted' => false,
         ]);
      }

      return redirect()->back();
   }

   public function countDownVote(Answer $answer, User $user)
   {

      $recordExist = MetaAnswer::where(['user_id' => $user->id,'answer_id' => $answer->id,])->get();
      if(count($recordExist) == 0 ){
         MetaAnswer::create([
            'user_id' => $user->id,
            'answer_id' => $answer->id,
            'is_upvoted' => false,
            'is_downvoted' => true,
         ]);
      }else{
         MetaAnswer::where(['user_id' => $user->id,'answer_id' => $answer->id])
         ->update([
            'is_upvoted' => false,
            'is_downvoted' => true,
         ]);
      }

      return redirect()->back();
   }
}
