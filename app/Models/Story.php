<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Story extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];

    public function saves(): BelongsToMany
    {
        return $this->belongsToMany(Save::class);
    }

    public function scenarios(): HasMany
    {
        return $this->hasMany(Scenario::class);
    }

    public function start_scenario(): HasOne
    {
        return $this->hasOne(Scenario::class);
    }
}
