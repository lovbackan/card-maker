<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'card_category',
        'title',
        'body',
    ];
    // This is a way to create relationships
    public function category(): HasOne
    {

        return $this->hasOne(Category::class, 'id', 'card_category');
    }
}
