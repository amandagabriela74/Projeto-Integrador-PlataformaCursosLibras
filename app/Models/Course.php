<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'topico',
        'embed',
        'descricao',
        'module_id'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function subscriptionsCourses()
    {
        return $this->hasMany(SubscriptionCourse::class);
    }
}

