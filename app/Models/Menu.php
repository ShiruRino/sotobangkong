<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'feature_1',
        'feature_2',
        'feature_3',
        'price_text',
        'sort_order',
        'is_active',
    ];
}