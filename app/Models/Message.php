<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'content',
        'channel_id',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function channel() {
        return $this->belongsTo(Channel::class);
    }
}
