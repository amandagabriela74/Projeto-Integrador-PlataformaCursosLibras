<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function choices(){
        return $this->hasMany(Choice::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function subscriptionsCourses()
    {
        return $this->hasMany(SubscriptionCourse::class);
    }

    public function subscriptionsQuizzes()
    {
        return $this->hasMany(SubscriptionQuiz::class);
    }
}
