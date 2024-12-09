<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleryImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
{
    return $this->belongsTo(GalleryCategory::class, 'gallery_cat_id');
}
}
