<?php

namespace App\Models;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'cover_image'];


    public function photos()
    {
    return $this->hasMany(Photo)
    }
}
