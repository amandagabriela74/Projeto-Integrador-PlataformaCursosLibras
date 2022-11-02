<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory;

    protected $fillable = [
        'alternative',
        'correct',
        'question_id',
        'answer_id',
    ];

    public function answers()
    {
        return $this->hasOne(Answer::class);
    }

}
