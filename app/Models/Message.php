<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Message extends Model
{
    use HasFactory;

    /**
     * Fillable vars
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'user_id',
    ];

    /**
     * Relation with User Model
     *
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
