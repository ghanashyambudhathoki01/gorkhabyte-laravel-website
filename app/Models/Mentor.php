<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = ['name', 'designation', 'bio', 'image', 'linkedin_url', 'github_url'];
}
