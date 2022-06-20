<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LinkType extends Model
{
    use HasFactory;

    /**
     * Fillable vars
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'image',
        'domain',
    ];

    /**
     * Relation with Link Model
     *
     * @return HasMany
     */
    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }

    /**
     * Relation with Icon Model
     *
     * @return HasOne
     */
    public function icon(): HasOne
    {
        return $this->hasOne(Icon::class, 'id', 'icon_id');
    }
}
