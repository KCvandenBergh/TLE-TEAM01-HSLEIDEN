<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];

    public function saves()
    {
        return $this->belongsToMany(Save::class);
    }

    public function scenarios()
    {
        return $this->hasMany(Scenario::class);
    }

    public function start_scenario()
    {
        return $this->hasOne(Scenario::class);
    }
}
