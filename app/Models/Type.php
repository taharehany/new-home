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
       'title','slug'
     ];

     public function Projects(){
       return $this->hasMany(Project::class, 'type_id')->orderby('id','DESC');
     }

     public function Project(){
      return $this->hasMany(Project::class, 'type_id')->orderby('id','DESC')->take(6);
    }
}
