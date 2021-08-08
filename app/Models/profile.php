<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
   protected $primarykey='user_id';
  public $incrementing=false;


    use HasFactory;
//1:1   هو الأساس
  public function user (){
        return $this->belongsTo(User::class,'user_id','id')->withDefault(); 
    }//->withDefault();  فقط لعلاقة 1:1
    
}
