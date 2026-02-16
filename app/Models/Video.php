<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'description', 'thumbnail', 'video_url', 'training_id'];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
