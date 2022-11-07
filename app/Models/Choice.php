<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function saves()
    {
        $this->belongsToMany(Save::class);
    }

    public function scenarios()
    {
        $this->belongsToMany(Scenario::class);
    }

    public function links_to()
    {
        $this->hasOne(Scenario::class);
    }
}
