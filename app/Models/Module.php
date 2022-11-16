<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function quizzes(){
        return $this->hasMany(Quiz::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
