<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;

    protected $fillable = ['story_id', 'user_id', 'choices'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function story()
    {
        return $this->hasOne(Story::class);
    }

    public function choices()
    {
        return $this->belongsToMany(Choice::class)->withTimestamps();
    }
}
