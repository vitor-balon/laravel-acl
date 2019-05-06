<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'id', 'user_id', 'title', 'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
