<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'card_front', 'card_back', 'user_id', 'ring_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function ring()
    {
        return $this->belongsTo(Ring::class);
    }
}
