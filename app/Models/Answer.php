<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id',
        'alternative_id',
        'quiz_id',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function alternative()
    {
        return $this->belongsTo(Alternative::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }    
}
