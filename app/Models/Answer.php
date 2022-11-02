<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'alternative_id',
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
