<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'is_visible'];

    public function saves()
    {
        /*Saves will be linked to individual Stories*/
        return $this->belongsToMany(Save::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false){
            $query
                = Story::where('title', 'like', '%' . \request('search') . '%')
            ->orwhere('description', 'like', '%' . \request('search') . '%')->with('category')->get());

           return view('stories.index', compact('query'));
           }
    }

    public function scenarios()
    {
        /*A Story will have multiple Scenarios linked to it*/
        return $this->hasMany(Scenario::class);
    }

    public function start_scenario()
    {
        /*All Stories begin somewhere, in this case a specific Scenario*/
        return $this->hasOne(Scenario::class);
    }

}


