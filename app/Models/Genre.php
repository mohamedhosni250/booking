<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    //attr
    //scope

    //rel
    public function tours()
    {
        return $this->hasMany(Tour::class);
    } // end of movies

    //fun

}//end of model
