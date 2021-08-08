<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ModelImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'modell_id', 'image_path'
    ];

    public function model()
    {
        return $this->belongsTo(Modell::class, 'modell_id', 'id');
    }

    public function getImageUrlAttribute()
    {
        return Storage::disk('uploads')->url($this->image_path);
    }
}
   