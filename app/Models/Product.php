<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }


    public function getImagesAttribute($value)
    {
        return json_decode($value);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
