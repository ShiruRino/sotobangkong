<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'history_title',
        'history_content',
        'history_image',
        'philosophy_title',
        'philosophy_content',
        'philosophy_image',
    ];
}