<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    use HasFactory;

    public function story()
    {
        /*Each scenario belongs to a story*/
        return $this->belongsTo(Story::class);
    }

    public function choices()
    {
        /*All scenarios have atleast one choice*/
        return $this->belongsToMany(Choice::class);
    }

    public function linked_by_choices()
    {
        /*Most, if not all, scenarios are linked to by certain choices*/
        return $this->hasMany(Choice::class);
    }

}
