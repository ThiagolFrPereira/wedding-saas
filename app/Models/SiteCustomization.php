<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCustomization extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'primary_color',
        'secondary_color',
        'font_family',
        'banner_image',
        'welcome_message',
        'sections_visibility'
    ];

    protected $casts = [
        'sections_visibility' => 'array'
    ];
}
