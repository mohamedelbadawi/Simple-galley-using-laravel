<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;
class Photo extends Model
{
    use HasFactory;

    protected $fillable=['album_id','photo'];

    public function Album()
    {
    return $this->belongsTo(Album::class);
    }
}
