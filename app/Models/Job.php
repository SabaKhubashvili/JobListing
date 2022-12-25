<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
      'title',
      'description',
      'responsibility',
      'qualifications',
      'benefits',
      'salary'
    ];

    public function tags(){
        return $this->belongsToMany('App\Models\Tag')->as('tag');
    }

    public function getLogoPathAttribute($value){
      return 'images/job/' . $value;
    }
}
