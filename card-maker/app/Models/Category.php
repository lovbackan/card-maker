<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'color',
    ];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class, 'card_category');
    }
}
