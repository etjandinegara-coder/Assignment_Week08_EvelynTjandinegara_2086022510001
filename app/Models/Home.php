<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    /** @use HasFactory<\Database\Factories\HomeFactory> */
    use HasFactory;

    protected $fillable = [
        'greeting',
        'description',
        'about_title',
        'about_description',
        'contact_title',
        'contact_description',
    ];
}
