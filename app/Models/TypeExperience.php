<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeExperience extends Model
{
    protected $table = 'type_experience';
    public function experiences()
    {
        return $this->hasMany(Experience::class, 'type_id')
            ->orderBy('id', 'desc');
    }
}
