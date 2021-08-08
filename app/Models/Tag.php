<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
    ];
  

    public function models(){
        return $this->belongsToMany(Tag::class, 
           'model_tag',
           'tag_id',
           'modell_id',
           'id', // to 
           'id'// to tag)
          )  ;
    }
    
}
