<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Link extends Model
{
    use HasFactory;

    /**
     * Fillable vars
     *
     * @var string[]
     */
    protected $fillable =  [
        'name',
        'link',
        'user_id',
        'link_type_id',
    ];

    /**
     * Relation with User Model
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Relation with LinkType Model
     *
     * @return HasOne
     */
    public function type(): HasOne
    {
        return $this->hasOne(LinkType::class, 'id', 'link_type_id');
    }
}
