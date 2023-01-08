<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'products_id',
        'url'
    ];

    
    // get API call with url image
    // convert to url use Accessor  (Mutators Laravel)
    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}
