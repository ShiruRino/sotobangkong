<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.
    protected $fillable = [
        'background_image',
        'right_image',
        'heading_highlight',
        'heading_main',
        'description',
        'button_1_text',
        'button_1_link',
        'button_2_text',
        'button_2_link',
        'sort_order',
        'is_active',
    ];
}