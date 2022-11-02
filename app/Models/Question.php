<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'quiz_id',
    ];
    public function alternatives(){
        return $this->hasMany(Alternative::class);
    }
}
