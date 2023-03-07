<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Comments extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'answer',
        'post_id',
        'user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getAuthorComment()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
