<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['imgpath','name','category','price','quantity'];
    public function author()
    {
        return $this->hasOne(Author::class) ;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
