<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends Model
{
    protected $fillable = [
        'quote',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }  
}
