<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images()
{
    return $this->hasMany(GalleryImage::class, 'gallery_cat_id');
}
}
