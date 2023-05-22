<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'answer_id',
        'is_upvoted',
        'is_downvoted',
    ];

    public function answer(){
        return $this->belongsTo(Answer::class);
    }
}
