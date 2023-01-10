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
        $query->when($filters['search'] ?? false, fn ($query, $search)=>
        $query->where('title', 'like', '%' . $search . '%')
              ->orwhere('description', 'like', '%' . $search . '%')->with('category')->get());

        $query->when($filters['category'] ?? false, fn($query, $category) =>
        $query->whereHas('category', fn ($query) =>
        $query->where('slug', $category))
            ->orwhere('description', 'like', '%' . $search . '%')->with('category')->get());

        //$stories = Story::where('category_id', $categoryId)->get();

        //return view('stories.index', compact('query'));
    }

    public function category(){

        return $this-> belongsTo(Category::class);

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


