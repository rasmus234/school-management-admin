<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;


    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }

    public function parents(): BelongsToMany
    {
        return $this->belongsToMany(Parent::class);
    }
}
