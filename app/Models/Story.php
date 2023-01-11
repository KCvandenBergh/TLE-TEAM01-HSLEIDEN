<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'is_visible', 'category_id'];

    public function saves()
    {
        /*Saves will be linked to individual Stories*/
        return $this->hasMany(Save::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if (isSet($filters['search'])) {
            $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
                ->orwhere('description', 'like', '%' . $search . '%'));
        }
        if (isset($filters['category'])) {
            $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) => $query->where('id', $category)));
        }
        return $query;

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


