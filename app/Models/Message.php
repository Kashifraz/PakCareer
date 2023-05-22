<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_id',
        'counselor_id',
        'message_text',
        'is_student',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
