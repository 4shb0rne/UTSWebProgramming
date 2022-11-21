<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ["publisher_id", "title", "author", "year", "synopsis", "image"];
    public function bookcategories()
    {
        return $this->hasMany(BookCategory::class);
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
