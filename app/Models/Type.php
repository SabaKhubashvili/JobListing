<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;


    public function icons(){
        return $this->belongsTo('App\Models\TagIcon', 'icon_id');
    }
}