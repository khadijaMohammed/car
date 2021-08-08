<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
   protected $fillable = [
        'name',
        'licences_number',
        'end_licences_date',
        'color',
        'image',
        'car_number',
        'status',
        'slug',
        'description',
        'parent_id'
    ];



    public function models()
    {
        return $this->hasMany(Modell::class,'car_id','id');
    }

public function children(){
 
   return $this->hasMany(Car::class,'parent_id','id');

}

public function parent(){
return $this->belongsTo(Car::class,'parent_id','id')
->withDefault([
    'name'=>'No Parent'
]);

   

    
}
}

