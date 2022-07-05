<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    public function movies(){
        return $this->hasMany(Movie::class);
    }
}


