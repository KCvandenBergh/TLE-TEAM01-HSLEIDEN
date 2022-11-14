<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'scenario_id'];

    public function saves()
    {
        /*Choices can be saved to saves*/
       return $this->belongsToMany(Save::class);
    }

    public function scenarios()
    {
        /*Choices need to appear in their respective Scenarios*/
       return $this->hasMany(Scenario::class);
    }

    public function next_scenario()
    {
        /*Choices link to a following Scenario*/
        /*Use {{ $choice->scenario_id }} instead*/
        return $this->belongsTo(Scenario::class);
    }
}
