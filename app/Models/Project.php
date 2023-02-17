<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'type_id',
        'city_id',
        'location',
    ];
    public function CityData ()
    {
        return $this->belongsTo(City::class,'city_id');
    }

}
