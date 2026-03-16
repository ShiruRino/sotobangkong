<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon_class',
        'title',
        'hover_title',
        'description',
        'link',
        'sort_order',
        'is_active',
    ];
}