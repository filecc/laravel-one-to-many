<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'content', 'status', 'image'];

    public function technologies(): HasMany
    {
        return $this->hasMany(Technology::class);
    }
}
