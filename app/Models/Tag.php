<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function jobs(){
        return $this->belongsToMany('App\Models\Job')->as('job');
    }

    public function icons(){
        return $this->belongsTo('App\Models\TagIcon', 'icon_id');
    }
    
}
