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

    public function location(){
        return $this->belongsTo('App\Models\location', 'location_id');
    }

    public function language(){
        return $this->belongsTo('App\Models\language', 'language_id');
    }
    public function type(){
      return $this->belongsTo('App\Models\type', 'type_id');
  }

    public function getLogoPathAttribute($value){
      return 'images/job/' . $value;
    }
}
