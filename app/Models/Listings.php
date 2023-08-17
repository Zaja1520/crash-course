<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;
    //for model fields storing
    // protected $fillable = ['title', 'description', 'company', 'website', 'location', 'email', 'tags'];

    public function scopeFilter($query, array $filters)
    {
        //check if tag is exist then filter by tag
        if ($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag'). '%');
        }

        // check if user search something and filter it by title,desc,tags
        if ($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search'). '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
