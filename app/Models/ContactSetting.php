<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_image',
        'office_title',
        'address_line_1',
        'address_line_2',
        'phone',
        'whatsapp',
        'email_1',
        'email_2',
        'hours_title',
        'weekday_hours',
        'weekend_hours',
    ];
}