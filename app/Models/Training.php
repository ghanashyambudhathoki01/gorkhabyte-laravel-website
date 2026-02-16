<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'schedule', 'duration', 'price', 'image'];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($training) {
            if (empty($training->slug)) {
                $training->slug = \Illuminate\Support\Str::slug($training->title);
            }
        });

        static::updating(function ($training) {
            if ($training->isDirty('title') && empty($training->slug)) {
                $training->slug = \Illuminate\Support\Str::slug($training->title);
            }
        });
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
