<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'slug',
        'currency',
        'locale',
        'description',
        'status'
    ];
  


    public function modell()
    {
        return $this->hasMany(Model::class,'brand_id','id');
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('uploads/' . $this->image);
       //    return Storage::disk('uploads')->url($this->image);
        }
  
        return asset('images/default-image.jpg');
    }
}
