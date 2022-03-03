<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'adult_price', 'child_price', 'image', 'genre_id'];


    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }


    public function features()
    {
        return $this->belongsToMany(Feature::class, 'feature_tour', 'tour_id', 'feature_id');    
    }
}
