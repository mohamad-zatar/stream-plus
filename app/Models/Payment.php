<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'credit_card_last_four',
        'expiration_date',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
