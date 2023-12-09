<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'module_id',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function subscriptionsQuizzes()
    {
        return $this->hasMany(SubscriptionQuiz::class);
    }
}
