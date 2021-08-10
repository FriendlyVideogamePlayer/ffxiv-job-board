<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'ad_id',
        'title',
        'description',
        'discord_contact',
        'current_classes',
        'ad_type',
        'ad_posted',
        'ad_tags',
    ];

    public $timestamps = false;
}
