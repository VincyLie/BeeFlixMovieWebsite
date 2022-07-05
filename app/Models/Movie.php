<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Episode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    public function genre(){
        return $this-> belongsTo(Genre::class);
    }
    public function episodes(){
        return $this-> hasMany(Episode::class);
    }
}
