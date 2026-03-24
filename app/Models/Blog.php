<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'image', 'category', 'status', 'meta_description', 'is_featured', 'published_at'];

    protected $appends = ['image_url_formatted'];

    public function getImageUrlFormattedAttribute()
    {
        if (!$this->image) {
            return null;
        }

        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        }

        return asset('storage/' . $this->image);
    }
}
