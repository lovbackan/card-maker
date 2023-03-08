<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'card_category');
    // }
}
