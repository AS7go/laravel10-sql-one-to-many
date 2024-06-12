<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // каждой книге даст автора 
    public function author(){
        return $this->belongsTo(Author::class);
    }

}
