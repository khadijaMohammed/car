<?php

namespace App\Models;

use App\Models\ModelImage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modell extends Model
{
    use HasFactory;
    protected $perPage=5;
    protected $table='modells';
    protected $fillable = [
        'name',
        'slug',
        'release_year',
        'seats',
        'motor_type',
        'Specifications',
        'brand_id',
        'car_id',
        'image',
        'price',
        'sale_price',
        'quantity',
        'status',
        
    ];
   

    public function car()
    {
        return $this->belongsTo(Car::class,'car_id','id')->withDefault([
            'name'=>'no'
        ]);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function images()
    {
        return $this->hasMany(ModelImage::class, 'modell_id', 'id');
    }
    public function tags(){
        return $this->belongsToMany(
         Tag::class,
        'model_tag', // الجدول الوسيط
        'modell_id',
        'tag_id',
        'id', // to model
        'id'// to tag
        );
  }

  public function getImageUrlAttribute()
  {
      if ($this->image) {
          return asset('uploads/' . $this->image);
     //    return Storage::disk('uploads')->url($this->image);
      }

      return asset('images/default-image.jpg');
  }
 //نحول الكلمة لنظام عنوان تبدا بكبير
  // Mutators
  public function setNameAttribute($value)
  {
      $this->attributes['name'] = Str::title($value);
  }


  public static function validateRules()
  {
      return [
          'name' => 'required|string|max:255|min:1',
          'car_id' => 'required|exists:cars,id',
          'image' => 'image',
          'price' => 'numeric|min:0',
          'sale_price' => ['numeric', 'min:0', function($attr, $value, $fail) {
                  $price = request()->input('price');
                  if ($value >= $price) {
                      $fail($attr . ' must be less than regular price');
                  }
              },
          ]
      ];
  }

}
