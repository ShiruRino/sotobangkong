<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region',
        'address',
        'opening_hours',
        'map_link',
        'image',
        'sort_order',
        'is_active',
    ];
}