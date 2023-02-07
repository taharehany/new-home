<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $hidden = [
       'created_at',
       'updated_at',
     ];

     protected $fillable = [
       'title',
     ];

     public function Projects(){
       return $this->hasMany(Project::class, 'project_id');
     }
}
