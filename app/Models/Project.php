<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description', 'materials', 'instructions', 'image_url', 'skill_level_required', 'time'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'saved_projects', 'project_id', 'user_id');
    }
}
