<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunFact extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'title',
        'subtitle',
        'sort_order',
        'is_active',
    ];
}