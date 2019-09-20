<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ring extends Model
{
    protected $fillable = [
        'ring_name', 'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
