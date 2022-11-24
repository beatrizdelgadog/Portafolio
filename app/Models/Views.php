<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Views extends Model
{
    protected $table = 'views';
    protected $fillable = [
        'ip_address',
        'mode',
        'browser',
        'user_agent',
        'operative_system',
        'id',
        'city',
        'region_code',
        'region',
        'region_name',
        'country_code',
        'country_name',
        'continent_code',
        'continent_name',
        'latitude',
        'longitude',
        'timezone',
        'timezone',
        'location_accuracy_radius',
        'updated_at',
        'deleted_at',
        'no_accesible'
    ];
}
